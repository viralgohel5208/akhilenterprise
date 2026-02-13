<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Auth;

class Authenticate extends Middleware{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string{
        // return $request->expectsJson() ? null : route('login');
        if (!Auth::check()) {
            return route('admin.login-view');
        }
        if (Auth::user()->user_type == 1) {
            return route('enterprise-admin.dashboard');
            // return redirect()->intended('/enterprise-admin/dashboard');
        }
    }
}
