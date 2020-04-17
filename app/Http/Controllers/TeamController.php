<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\UploadImage;
use Validator;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Team;
use App\User;
use App\Notifications\TeamCreated;


class TeamController extends Controller
{
    public function getTeam()
    {
        $team = Auth::user()->team;
        if ($team == null) return (['success' => false, 'team' => null]);
        return response()->json(['success' => true, 'team' => $team, 'members' => $team->members, 'head' => $team->head]);
    }

    public function userHasTeam()
    {
        return Auth::user()->team_id != null ? response()->json(['success' => true, 'has_team' => true]) : response()->json(['success' => true, 'has_team' => false]);
    }

    public function leaveTeam () {
        if (Auth::user()->isTeamHead()) {
            // WE would be removing everyone from the team and deleting it
            $team = Auth::user()->team;
            $members = Auth::user()->team->members;
            foreach($members as $member) {
                $member->update(['team_id' => null]);
            }
            $team->delete();
            return  response()->json(['success' => true, 'message' => 'Team Deleted successfully']);
        }
        Auth::user()->update([
            'team_id' => null
        ]);
        return  response()->json(['success' => true, 'message' => 'You have successfuly left the team']);
    }

    public function removeTeamMember($id) {
        $user = User::findOrFail($id);
        if (!$user->isTeamHead()){
            $user->update([
                "team_id" => null
            ]);
        }
        return  response()->json(['success' => true, 'message' => 'User has been removed']);

    }

    public function createTeam(Request $request)
    {

        if (Auth::user()->team_id == null) {
            $data = $request->all();
            $validation = $this->validator($data);
            if ($validation->fails()) return response()->json(['success' => false, 'error' => $validation->errors()], 422);
            $invalidEmail = $this->validateUser($data['members']);
            if ($invalidEmail) return response()->json(['success' => false, 'error' => ['message' => $invalidEmail . " has not created an account yet"]], 422);
            DB::transaction(function () use ($data) {
                $data['image'] = UploadImage::handle($data['image'], 'teams');
                $data['team_head'] = Auth::id();
                $team = Team::create($data);
                $this->UpdatesUsers($data['members'], $team->id);
                $this->notifyUsers($data['members'], $team->name);
            }, 3);
            return response()->json(['success' => true, 'message' => 'Team successfully created'], 200);
        }
        return response()->json(['success' => false, 'message' => 'You have created a team already'], 200);
    }

    protected function validator($data)
    {
        return Validator::make($data, [
            'name' => 'required|min:5|unique:teams',
            'description' => 'required|min:30',
            'members' => ['required', 'array'],
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000'
        ]);
    }

    public function validateUser($members)
    {
        $valid = false;
        foreach ($members as $member) {
            $user = User::where('email', $member)->first();
            if ($user == null) {
                $valid = $member;
                break;
            }
        }
        return $valid;
    }


    protected function UpdatesUsers($members, $team_id)
    {
        foreach ($members as $member) {
            $user = User::where('email', $member)->first();
            $user->team_id = $team_id;
            $user->update();
        }
    }

    protected function notifyUsers($emails, $teamname)
    {
        $data['message'] = "You team has been successfully created, Kindly log on to your dashboard to start application of your project";
        $data['teamname'] = $teamname;
        foreach ($emails as $mail) {
            $user = User::where('email', $mail)->first();
            $data['firstname'] = $user->firstname;
            $user->notify(new TeamCreated($data));
        }
    }
}
