<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class Admin
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
        if ($request->user() && $request->user()->role != 'ADMIN' && $request->user()->role == 'USER') {
            error_log("OUT of this");
            return new Response(abort(401));
        }
        error_log("IN of this");
        return $next($request);
    }
}
