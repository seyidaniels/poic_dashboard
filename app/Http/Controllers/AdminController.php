<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\GeneralMessage;
use App\User;
use Notification;
use Auth;
use App\Team;
use App\Project;

class AdminController extends Controller
{
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
        dd($project);
        return view('admin.single-project');
    }

    public function mailAll()
    {
        $data['message'] =
            "Hello, How you doing, If you have created a team, You can now create, update and submit your Project! \n Also note that your registration is void if you have not created a team and started a project. \n  Only team members who have registered on the website can be added to a team";

        $data['subject'] = "Hiya, Start Submitting your Projects now!";

        $users = User::all();

        Notification::send($users, new GeneralMessage($data));

        return response()->json(['error' => false, 'message' => 'message sent successfully']);
    }
}