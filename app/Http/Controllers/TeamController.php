<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\UploadImage;
use PharIo\Manifest\InvalidEmailException;
use Validator;
use DB;
use Auth;
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

    public function createTeam(Request $request)
    {

        if (Auth::user()->team_id == null) {
            $data = $request->all();
            $validation = $this->validator($data);
            if ($validation->fails()) return response()->json(['success' => false, 'error' => $validation->errors()], 422);
            DB::transaction(function () use ($data) {
                $data['image'] = UploadImage::handle($data['image'], 'teams');
                $data['team_head'] = Auth::id();
                $team = Team::create($data);
                $invalidEmail = $this->validatesAndUpdatesUsers($data['members'], $team->id);
                if ($invalidEmail) throw new \Exception($invalidEmail . " has not created an account yet", 422);
                $this->notifyUsers($data['members'], $team->name);
            }, 3);
            return response()->json(['success' => true, 'message' => 'Team successfully created'], 200);
        } else {
            return response()->json(['success' => false, 'message' => 'You have created a team already'], 200);
        }
    }

    protected function validator($data)
    {
        return Validator::make($data, [
            'name' => 'required|min:5|max:15|unique:teams',
            'description' => 'required|min:30',
            'members' => 'required|array',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000'
        ]);
    }


    protected function validatesAndUpdatesUsers($members, $team_id)
    {
        $email = false;
        foreach ($members as $member) {
            $user = User::where('email', $member)->first();
            if ($user === null) {
                $email = $member;
                break;
            } else {
                $user->team_id = $team_id;
                $user->update();
            }
        }
        return $email;
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