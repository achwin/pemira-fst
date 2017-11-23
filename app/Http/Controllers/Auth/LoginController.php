<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Session;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function loginAction(Request $request)
    {
        $user = User::where('nim_user', '=' ,$request->nim_user)->first();
        $credentials = $request->only('nim_user', 'password_user');
        if ($user != null)
        {
            if (Auth::attempt($credentials, $request->has('remember')))
            {
                Auth::login($user,true);


                return redirect::to('/');
            }
        }
        Session::flash('alert-danger', 'NIM atau password anda salah');
          return redirect()->back()->withInput();
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
