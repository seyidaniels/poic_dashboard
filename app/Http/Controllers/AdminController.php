<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\GeneralMessage;
use Notification;
use Auth;
use Hash;
use DB;
use App\User;
use App\Team;
use App\Project;
use App\Review;
use App\Http\Controllers\RegisterController;
use App\Helpers\UploadImage;

class AdminController extends Controller
{

    private $register;

    public function __construct(RegisterController $register)
    {
        $this->register = $register;
    }
    public function index()
    {
        if (Auth::check()) {
            return redirect('/admin/dashboard');
        }
        return view('admin.login');
    }
    public function dashboard()
    {
        $users = User::all()->count();
        $teams = Team::all()->count();
        $projects = Project::where('is_submitted', 1)->count();
        return view('admin.dashboard', compact('users', 'teams', 'projects'));
    }
    public function getTeams()
    {
        $teams = Team::paginate(10);
        return view('admin.teams', compact('teams'));
    }
    public function getProjects()
    {
        $projects = Auth::user()->projects();

        return view('admin.projects', compact('projects'));
    }
    public function viewProject($id)
    {
        $project = Project::findOrFail($id);
        // sme stands for subject matter experts in the particular project
        // $smes = $this->subjectMa
        return view('admin.single-project', compact('project'));
    }
    public function adminView()
    {
        $admins = User::where('is_admin', 1)->where('id', '!=', Auth::id())->paginate(10);
        return view('admin.view-admins', compact('admins'));
    }
    public function communicate()
    {
        return view('admin.communication');
    }
    public function viewPass()
    {
        return view('admin.change-password');
    }

    public function imageIndex()
    {
        return view('admin.image');
    }

    public function uploadImage(Request $request)
    {
        $data = $request['image'];
        return $data;
        DB::transaction(function () use ($data) {
            $data['image'] = UploadImage::handle($data['image'], 'gallery');
            Image::create($data);
        });

        return redirect()->back()->with(['success' => 'Image uploaded successfully']);
    }

    public function viewScores()
    {
        $projects = Project::all();
        return view('admin.scores', compact('projects'));
    }

    public function createAdmin(Request $request)
    {
        $request['password'] = $request['password_confirmation'] = str_random(5);
        $response = $this->register->register($request)->getContent();
        return response()->json(json_decode($response));
    }

    public function mailAll(Request $request)
    {

        $request->validate([
            'subject' => 'required',
            'message' => 'required'
        ]);

        $users = $request['type'] ? $this->mailTo($request['type']) : Team::find($request['team_id'])->members;

        if ($users !== null) {

            $data['message'] = $request['message'];

            $data['subject'] = $request['subject'];

            try {
                Notification::send($users, new GeneralMessage($data));
            } catch (\Exception $e) {
                return redirect()->back()->with(['error' => $e->getMessage()]);
            }

            return redirect()->back()->with(['message' => 'Mail has been successfully sent']);
        }
    }

    public function mailTo($option)
    {

        if (!in_array($option, ['team_heads', 'applicants', 'admins'])) {
            return null;
        }
        $users = [];
        switch ($option) {
            case 'team_heads':
                $users = $this->teamHeads();
                break;
            case 'admins':
                $users = User::where('is_admin', 1)->get();
                break;
            case 'applicants':
                $users = User::where('is_admin', 0)->get();
        }
        return $users;
    }

    private function teamHeads()
    {
        $teams = Team::all();
        $users = [];
        foreach ($teams as $team) {
            array_push($users, $team->head);
        }
        return $users;
    }

    public function addProjectReviewers(Request $request)
    {
        DB::transaction(function () use ($request) {
            $mail_reviewers = [];
            $reviewers = $request['reviewers'];
            $project_id = $request['project_id'];

            foreach ($reviewers as $category => $reviewer) {
                foreach ($reviewer as $categoryReviewer) {
                    Review::create(['project_id' => $project_id, 'vetting_category' => $category, 'reviewer_id' => $categoryReviewer]);
                    if (!in_array($categoryReviewer, $mail_reviewers)) array_push($mail_reviewers, $categoryReviewer);
                }
            }

            $this->updateProjectStatus($project_id, 'processing');

            // Send a Mail to all Reviewers telling them they have been selected to Review a Project!
            $mail_reviewers = User::find($mail_reviewers);

            $project = Project::find($project_id);

            $data['message'] = "Hello, a Project '" . $project->title . "' has been assigned to you, Kindly Log in to review the proposal";
            $data['project_id'] = $project_id;
            $data['subject'] = "A Project has been assigned to you";

            Notification::send($mail_reviewers, new GeneralMessage($data));
        });

        return response()->json(['success' => true, 'message' => 'Reviewers have been added']);
    }

    public function updateProjectStatus($id, $status)
    {
        $project = Project::findOrFail($id);

        $project->status = $status;

        $project->update();

        /// Send a Mail to Notify Applicants of their new Update apparently
        $data = [];

        $data['subject'] = "Project Under Review";

        switch ($status) {
            case "processing":
                $data['message'] = "Your Application is being reviewed, You would be notified when you get to the next stage! Stay Updated on website and social media pages";
                break;
            case "modification":
                $data['message'] = "Your Application has been forwarded to our list of judges, You would be notified when you get to the next stage! Stay Updated on website and social media pages";
                break;
        }
        $data['team_id'] = $project->team_id;
        $request = new Request($data);
        $this->mailAll($request);
    }

    public function scoreProject(Request $request)
    {
        $data = $request->All();
        $reviewer_id = Auth::id();
        $project_id = $data['project_id'];
        $scores = $data['score'];

        foreach ($scores as $category => $score) {
            Review::where([
                'reviewer_id' => $reviewer_id,
                'project_id' => $project_id,
                'vetting_category' => $category
            ])->update(['score' => $score]);
        }

        $this->sendProjectToJudges($project_id);

        return response()->json(['success' => true, 'message' => 'You have successfully Scored this Project']);
    }

    public function sendProjectToJudges($project_id)
    {

        // Check if th project has been completely Marked By all Reviewer if it has, Kindly change the project status
        $reviews = Review::where([
            'project_id' => $project_id,
            'score' => null,
        ])->get();

        $shouldMove = [];
        foreach ($reviews as $r) {
            array_push($shouldMove, $r->user->role->role);
        }

        if (!in_array('reviewer', $shouldMove)) {
            $this->updateProjectStatus($project_id, 'modification');
        }
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed'
        ]);
        $password = $request['old_password'];
        $user = Auth::user();
        $current_password = $user->password;
        if (Hash::check($password, $current_password)) {
            $newpassword = $request['password'];
            $user->update(['password' => $newpassword]);
            return redirect()->back()->with(['message' => 'Password has been changed successfully']);
        } else {
            return redirect()->back()->with(['error' => 'Invalid Password inputted']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->to('/admin');
    }
}