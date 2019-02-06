<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\GeneralMessage;
use App\User;
use Notification;

class AdminController extends Controller
{
    public function mailAll()
    {
        $data['message'] =
            "Hello, how are you doing and trust your day went well, This is to notify you that the competiton terms and conditions have been updated on your dashboard\n  Kindly log on to view the rules and regulations";

        $data['subject'] = "Hey, Check POIC Rules and Guildlines";

        $users = User::all();

        Notification::send($users, new GeneralMessage($data));


        $data['message'] =
            "We noticed you have not created a team yet, Kindly note that creating a team is a prr-requisite to applying for the competition, Please treat as urgent";

        $data['subject'] = "Create a Team Today!";

        $users = User::where('team_id', null)->get();


        Notification::send($users, new GeneralMessage($data));


        return response()->json(['error' => false, 'message' => 'message sent successfully']);

    }
}