<?php

namespace App\Http\Middleware;

use Closure;

class IsSuper
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
        if (Auth::user()->role->role !== 'super') {
            return redirect()->back() - with(['error' => 'This is a Super Admin function']);
        }
        return $next($request);
    }
}