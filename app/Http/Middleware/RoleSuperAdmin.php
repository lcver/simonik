<?php

namespace App\Http\Middleware;

use Closure;

class RoleSuperAdmin
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
        $user = \Auth::user();
        if ($user->role != 'Super Admin') {
            return redirect(url('home'));
        }
        return $next($request);
    }
}
