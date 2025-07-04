<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SuperAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // app/Http/Middleware/SuperAdminMiddleware.php
public function handle($request, Closure $next)
{
    if (auth()->guard('admin')->check() && auth()->guard('admin')->user()->role == 'super_admin') {
        return $next($request);
    }
    return redirect('/admin/dashboard')->with('error', 'Unauthorized access');
}
}
