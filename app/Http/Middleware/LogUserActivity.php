<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class LogUserActivity
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            Auth::user()->setOnline();
        }

        return $next($request);
    }
}