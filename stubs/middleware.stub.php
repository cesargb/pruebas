<?php

namespace Descom\Skeleton\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SkeletonMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }
}
