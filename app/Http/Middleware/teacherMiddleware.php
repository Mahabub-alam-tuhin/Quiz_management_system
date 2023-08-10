<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;


class teacherMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // return $next($request);

        if(Auth::check()){
            if(Auth::user()->user_role_id == 2)
            {
                
                return $next($request);
            }
            else
            {
                return redirect('/');
            }
        }
        else{
            return route('login');
        }
        
    }
}
