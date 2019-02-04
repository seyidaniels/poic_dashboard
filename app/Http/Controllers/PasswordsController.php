<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Password;
use App\Notifications\resetPassword;
use App\PasswordReset;
use \Carbon\Carbon;
use DB;
use Hash;

class PasswordsController extends Controller
{
    public function recover(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            $error_message = "Your email address was not found.";
            return response()->json(['success' => false, 'error' => $error_message], 401);
        }

        DB::transaction(function () use ($user) {
            $data['token'] = str_random(50);
            $data['email'] = $user->email;
            $data['firstname'] = $user->firstname;
            $data['message'] = "You requested for a password change on your account, You have just 15 minutes from when you requested a password change to perform this action. Kindly ignore if this was not from you";
            PasswordReset::create($data);
            $user->notify(new resetPassword($data));
        }, 3);

        return response()->json([
            'success' => true, 'message'=> 'A reset email has been sent! Please check your email.'
        ]);
    }
    public function index ($email_token) {
        $reset = PasswordReset::where('token', $email_token)->first();
        if (!$reset) {
            return view ('reset-password', ['success' => false, 'message' => 'Invalid Token']);
        }
        // Check if the time difference between now and then is less
        $now = Carbon::now ();
        $diff = $now->diffInMinutes($reset->created_at);

        if ($diff > 15) {return  view('reset-password', ['success' => false, 'message' => 'Token expired']); }
        $user = User::where('email', $reset->email)->first();
        return view ('reset-password', ['success' => true, 'user' =>  $user, 'token' => $reset->token]);

    }

    public function submitRequest (Request $request) {
        // Get the User Id
        if ($request['password'] !== $request['password_confirmation']) {
                return redirect()->back()->with (['error' => true, 'message' => 'Passwords do not match']);
        }
        $user = User::find($request['user_id']);
        $current_password = $user->password;
        $password = $request['password'];
        if (!Hash::check($password, $current_password)) {
            $newpassword = $request['password'];
            // PasswordReset::where('token', $request['token'])->first()->delete();
            $user->update(['password' => $newpassword]);
            return redirect()->back ()->with (['success' => true, 'message' => 'Your password has been changed successfully']);

        }else {
            return redirect()->back ()->with (['error' => true, 'message' => 'Your password cant be same as previous password']);
        }
}
}
