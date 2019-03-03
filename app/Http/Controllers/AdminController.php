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
            "Hello, You can now submit your project in any category of your choice and the project deadline has been further adjourned. Furthermore, Your Project Content would be minimum of 300 words rather than 1000 words";

        $data['subject'] = "Project Submission Terms Updated";

        $users = User::all();

        Notification::send($users, new GeneralMessage($data));

        return response()->json(['error' => false, 'message' => 'message sent successfully']);
    }
}