<?php

namespace App\Http\Middleware;

use DB;
use Closure;

class MaintenanceMode
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
        $maintenance = DB::table('configurations')
            ->where('name', '=', 'maintenance')
            ->first()->value;

        if ($maintenance == 'off') {
            return $next($request);
        }
        else {
            return redirect('/maintenance');
        }
    }
}
