<?php

namespace App\Http\Middleware;

use Closure;

class IsUserAdminMiddleware
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

        if (!auth()->user()->is_admin) {
            return redirect('home');
        }

        return $next($request);
    }
}
