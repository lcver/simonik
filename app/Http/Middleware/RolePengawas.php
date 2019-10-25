<?php

namespace App\Http\Middleware;

use Closure;

class RolePengawas
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
        if ($user->role != 'Pengawas') {
            return redirect(url('home'));
        }
        return $next($request);
    }
}
