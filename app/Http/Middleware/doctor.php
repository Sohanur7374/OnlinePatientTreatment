<?php

namespace App\Http\Middleware;

use Closure;
use Auth; //at the top

class faculty
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       if (Auth::check() && Auth::user()->role == 'doctor') {
            return $next($request);
        }
        elseif (Auth::check() && Auth::user()->role == 'admin') {
            return redirect('/admin');
        }
        elseif (Auth::check() && Auth::user()->role == 'patient') {
            return redirect('/patient');
        }
        else {
            return redirect('/unauthorized');
        }
    }
}
