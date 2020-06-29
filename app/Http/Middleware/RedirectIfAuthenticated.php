<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if(Auth::user()->mainRole()->name ==='administrator') {
                return redirect()->route('dashboard.index');
            }
            elseif(Auth::user()->mainRole()->name ==='eventorganizer'){
                return redirect()->route('dashboard.index');
            }elseif (Auth::user()->mainRole()->name ==='student'){
                return redirect()->route('student.index');
            }
        }

        return $next($request);
    }
}
