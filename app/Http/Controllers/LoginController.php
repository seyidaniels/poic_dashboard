<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use JWTAuth;
use App\Notifications\WelcomeEmail;
use App\User;
use DB;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $data = $request->only('email', 'password');

        $rules = [
            'email' => 'required|email',
            'password' => 'required',
        ];
        $validator = Validator::make($data, $rules);

        if($validator->fails()) {
            return response()->json(['success'=> false, 'error'=> $validator->messages()], 422);
        }

        try {
            // attempt to verify the credentials and create a token for the user
            if (! $token = JWTAuth::attempt($data)) {
                return response()->json(['success' => false, 'error' => 'Invalid Login Credentials']);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['success' => false, 'error' => 'Failed to login, please try again.'], 500);
        }
        // all good so return the token
        // Check if Users mail has been verified
        $user = JWTAuth::toUser($token);
        if ($user->verified == false ) return response()->json (['success' => false, 'error' => 'Ooops! Seems your account has not been verified, Kindly check your email for verification', 'not_verified' => true]);
        return response()->json(['success' => true, 'message' => 'Authentication Success', 'data'=> [ 'token' => $token, 'user' => $user ]], 200);
    }
    /**
     * Log out
     * Invalidate the token, so user cannot use it anymore
     * They have to relogin to get a new token
     *
     * @param Request $request
     */
    public function logout(Request $request) {
        $this->validate($request, ['token' => 'required']);

        try {
            JWTAuth::invalidate($request->input('token'));
            return response()->json(['success' => true, 'message'=> "You have successfully logged out."]);
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['success' => false, 'error' => 'Failed to logout, please try again.'], 500);
        }
    }

    public function resendVerification (Request $request) {

        $email = $request['email'];

        $user = User::where('email', $email)->first();

        DB::transaction(function () use ($user) {
        $data['email_token'] = str_random(30);
        $user->email_token  = $data['email_token'];











        
        $user->update();

        $data['firstname'] = $user->firstname;
        $data['resend'] = true;
        $data['message'] = 'You requested for a new verfication code, If your account has been verified, Kindly ignore this email';

        $user->notify(new WelcomeEmail($data));
        });

        return response()->json (['success' => true, 'message' => 'Another email has been sent to you, Please check your inbox and your spam folder']);

    }
}
