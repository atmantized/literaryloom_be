<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class FilamentAccessMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Add your logic here to control access based on the user's role or other criteria.
        // For example:
        // if (!auth()->user()->hasRole('admin')) {
        //     abort(403, 'You do not have access to the Filament admin dashboard.');
        // }

        return $next($request);
    }
}