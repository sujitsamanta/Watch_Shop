<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {

            // Check if the user’s email/OTP is verified
            if (!Auth::user()->is_verified) {

                flash()->addWarning('Please verify your email before accessing this page.');
                return redirect('/verify-otp_verification_form_resubmit');
            } else {
                return $next($request);
            }
        } else {
            flash()->addInfo('Please login first.');
            return redirect('/login');
        }
    }
}
