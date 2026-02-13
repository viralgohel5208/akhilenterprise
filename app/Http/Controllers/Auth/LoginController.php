<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Auth;
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
    // protected $redirectTo = '/home';
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('guest')->except('logout');
        // $this->middleware('auth')->only('logout');
        $this->middleware('guest:admin')->except('logout');
    }

    public function showAdminLoginForm(){
        return view('admin.auth.login');
    }

    public function adminLogin(Request $request){
        $data = $request->all();
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:8'
        ]);
        $user = User::where('email', $data['email'])->first();
        if($user->user_type == 1){
            if (Auth::attempt($request->only('email', 'password'))) {
                return redirect()->route('enterprise-admin.dashboard')->with('success', 'Login successfully!');
            }else{
                return redirect()->back()->with('error', 'Credential does not matched please try again!');
            }
        }else{
            return redirect()->back()->with('error', 'You are not admin user!');
        }
    }

    public function logout(Request $request){
        Session::flush();
        Auth::logout();
        return redirect()->route('admin.login-view');
    }
}
