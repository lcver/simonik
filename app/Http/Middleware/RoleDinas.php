<?php

namespace App\Http\Middleware;

use Closure;

class RoleDinas
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
        if ($user->role != 'Dinas') {
            return redirect(url('home'));
        }
        return $next($request);
    }
}
