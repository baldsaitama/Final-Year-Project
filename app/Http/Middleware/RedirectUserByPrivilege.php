<?php

namespace App\Http\Middleware;

use Closure;

class RedirectUserByPrivilege
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
        if ($request->user()) {
            if (!in_array($request->user()->user_type, ['system'])) {
                return redirect('/home');
            }
        }
        return $next($request);
    }
}
