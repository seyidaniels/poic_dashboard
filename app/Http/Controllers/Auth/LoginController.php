<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:users',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        $credentials['is_admin'] = 1;
        $credentials['verified'] = 1;

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended($this->redirectTo);
        } else {
            return redirect()->back()->with(['message' => 'Invalid Login']);
        }
    }
    public function disAuth()
    {
        dd("seyi daniels");
        Auth::logout();
        dd("seyi");
        return view('admin');
    }
}