<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Validator, DB, Hash, Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Mail\Message;
use App\Notifications\WelcomeEmail;
use App\Notifications\WelcomeAdmin;


class RegisterController extends Controller
{
    /**
     * API Register
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $data = $request->all();

        $rules = [
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'phone' => 'required|numeric:11|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed'
        ];

        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'error' => $validator->messages()], 422);
        }

        $data['email_token'] = str_random(30); //Generate verification code


        DB::transaction(function () use ($data) {

            $user = User::create($data);

            $data['message'] = 'Thank you for creating an account to participate in the Professor Ogundipe Innovative Challenge '.date('Y'). '.To continue please confirm your email by clicking the button below';

            array_key_exists('is_admin', $data) ? $this->registerAdmin($data, $user) : $user->notify(new WelcomeEmail($data));
        }, 4);

        return response()->json(['success' => true, 'message' => 'Thanks for signing up! Please check your email to complete your registration.'], 200);
    }

    public function registerAdmin($data, $user)
    {
        Role::create(['role' => $data['role'], 'user_id' => $user->id, 'category' => $data['category']]);
        $data['message'] = "You have been added as an Admin on POIC! Your password is '" . $data['password'] . "'\n Kindly log on to perform admin duties";
        $data['subject'] = "You have been added as an Administrator";
        $user->notify(new WelcomeAdmin($data));
    }


    public function verifyUser($email_token)
    {
        $user = User::where('email_token', $email_token)->first();
        $data = [];
        if (!is_null($user)) {
            if ($user->verified == true) {
                return view('verify',  [
                    'success' => true,
                    'message' => 'Account already verified..'
                ]);
            }
            $user->update(['verified' => true]);
            return view('verify', [
                'success' => true,
                'message' => 'You have successfully verified your email address.'
            ]);
        } else {

            return view('verify', ['success' => false, 'error' => "Verification code is invalid."]);
        }
    }
}
