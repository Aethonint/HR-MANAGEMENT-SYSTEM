<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
      public function handle(Request $request, Closure $next, $role)
    {
        // Check if the authenticated user's role matches the required role
        if (Auth::check() && Auth::user()->role == $role) {
            return $next($request);
        }

        // If the user is not authorized, redirect to the main dashboard or home page
       abort(403, 'Unauthorized action.');
    }
}
