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

    protected $auth;

    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */


     public function login(Request $request)
    {
        $this->validate($request, [
            'email'      => 'required|string|max:255',
            'password'  => 'required|string|min:6|max:255'
        ]);

 

        // if login attempt is successful
        if ($this->attempt($request)) {
            $request->session()->regenerate();

           // Notify::success(greet(), '');
            return redirect()->route('root.dashboard');
        }

        throw ValidationException::withMessages([
            'name' => [trans('auth.failed')]
        ]);

        return back();
    }

      protected function attempt(Request $request)
    {
        return $this->guard()->attempt(
            $this->credentials($request), $request->filled('remember')
        );
    }



  
}
