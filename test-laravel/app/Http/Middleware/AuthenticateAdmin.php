<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthenticateAdmin
{
    public function handle($request, Closure $next)
    {
        if (!$request->session()->has('admin_user')) {
            return redirect('/permission-denied');
        }

        return $next($request);
    }
}
