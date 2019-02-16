<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Authenticated
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
        if (Auth::check()) {//a guard that checks if this works
            return $next($request);//lets request continue
        }
        return redirect('/login');
    }
}
