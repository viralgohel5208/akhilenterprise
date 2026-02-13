<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Carbon\Carbon; 
use Illuminate\Support\Str;
use Auth;
use Session;
use DB; 
use Mail; 
use Hash;

class ForgotPasswordController extends Controller{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    public function showForgetPasswordForm(Request $request){
        return view('admin.auth.forgotPassword');
    }

    public function submitForgetPasswordForm(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);
        $token = Str::random(64);
        DB::table('password_resets')->insert([
            'email' => $request->email, 
            'token' => $token, 
            'created_at' => Carbon::now()
        ]);
        Mail::send('email.forgotPassword', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password');
        });
        return redirect()->back()->with('success', 'We have e-mailed your password reset link!');
    }

    public function showResetPasswordForm(Request $request, $token){
        $token = $token;
        return view('admin.auth.resetPassword', compact('token'));
    }

    public function submitResetPasswordForm(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:8',
            'confirm_password' => 'required|string|min:8'
        ]);
        $updatePassword = DB::table('password_resets')->where(['email' => $request->email, 'token' => $request->token])->first();
        if(!$updatePassword){
            return redirect()->back()->with('error', 'Invalid token!');
        }
        $user = User::where('email', $request->email)->update(['password' => Hash::make($request->password)]);
        DB::table('password_resets')->where(['email'=> $request->email])->delete();
        return redirect()->route('admin.login-view')->with('success', 'Your password has been changed!');
    }
}
