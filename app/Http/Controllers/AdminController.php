<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\GeneralMessage;
use App\User;
use Notification;
use Auth;
use App\Team;
use App\Project;
use App\Http\Controllers\RegisterController;
use App\Review;
use Hash;

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
        $projects = Project::orderBy('created_at', 'asc')->paginate(10);
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
        $admins = User::where('is_admin', 1)->get()->except(Auth::id());
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
            } catch (\Exception $e) { }

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
        // $validation = Validator::make($request->all(), [
        //     'project_id' => 'required',
        //     'reviewers' =>  'required'
        // ]);
        // if ($validation->fails()) return response()->json(['success' => false, 'error' => $validation->errors()]);

        $reviewers = $request['reviewers'];
        $project_id = $request['project_id'];

        $mail_reviewers = [];

        foreach ($reviewers as $category => $reviewer) {
            foreach ($reviewer as $categoryReviewer) {
                Review::create(['project_id' => $project_id, 'vetting_category' => $category, 'reviewer_id' => $categoryReviewer]);
                if (!in_array($categoryReviewer, $mail_reviewers)) array_push($mail_reviewers, $categoryReviewer);
            }
        }

        $this->updateProjectStatus($project_id, 'processing');

        // Send a Mail to all Reviewers telling them they have been selected to Review a Project!

        return response()->json(['success' => true, 'message' => 'Reviewers have been added']);
    }

    public function updateProjectStatus($id, $status)
    {
        $project = Project::findOrFail($id);

        $project->status = $status;

        $project->update();

        /// Send a Mail to Notify Applicants of their
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
}