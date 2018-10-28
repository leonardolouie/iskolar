<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

//use Notify;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Alert;
use App\user;

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

  protected $auth;

    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    public function showLoginForm()
    {
        
        
         

     return view('front.pages.login');

    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'name'      => 'required|string|max:255',
            'password'  => 'required|string|min:6|max:255'
        ]);

 

        // if login attempt is successful
        if ($this->attempt($request)) {
            $request->session()->regenerate();

           // Notify::success(greet(), '');
            Alert::success(Auth::user()->name, 'You have successfully logged in')->autoclose(3500);
            return redirect()->route('root.dashboard');
        }

        throw ValidationException::withMessages([
            'name' => [trans('auth.failed')]
        ]);

        return back();
    }

    /**
     * Try logging-in to the application.
     * @param  Request $request
     * @return boolean
     */
   protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(
            $this->credentials($request), $request->filled('remember')
        );
    }
    /**
     * Try logging-out from the application.
     * @param  Request $request
     * @return redirect
     */
    public function logout(Request $request)
    {
        $this->auth::guard()->logout();

        $request->session()->invalidate();

        return redirect()->route('login');
    }

    



  
}
