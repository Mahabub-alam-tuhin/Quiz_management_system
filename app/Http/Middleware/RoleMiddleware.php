<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    // public function handle($request, Closure $next, ...$roles)
    // {
    //     if (Auth::check()) {
    //         $userRole = Auth::user()->role;
    //         if (in_array($userRole, $roles)) {
    //             // Grant access to users with the specified roles
    //             return $next($request);
    //         }
    //     }

    //     abort(403, 'Unauthorized');
    // }
}
