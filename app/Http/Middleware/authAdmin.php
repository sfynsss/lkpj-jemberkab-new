<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authAdmin
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
        if((Auth::user() && Auth::user()->hak_akses == 'ADMIN') || (Auth::user() && Auth::user()->hak_akses == 'OPD') ){
            return $next($request);
        }
        return redirect('/');
    }
}
