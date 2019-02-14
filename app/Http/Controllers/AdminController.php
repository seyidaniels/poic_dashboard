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
            "Hello, How you doing, If you have created a team, You can now create, update and submit your Project! \n Also note that your registration is void if you have not created a team and started a project. \n  Only team members who have registered on the website can be added to a team";

        $data['subject'] = "Hiya, Start Submitting your Projects now!";

        $users = User::all();

        Notification::send($users, new GeneralMessage($data));

        return response()->json(['error' => false, 'message' => 'message sent successfully']);

    }
}