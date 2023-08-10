<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Session;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Session::get ('studentId')){
            return $next($request);
        }
        else{
          return \redirect('/');
        }
    }
}
