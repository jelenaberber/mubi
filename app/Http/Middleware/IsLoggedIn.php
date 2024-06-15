<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsLoggedIn
{

    public function handle(Request $request, Closure $next): Response
    {
        if (!session()->has('user'))
            return redirect('login')->with('middlewareError', 'If you want to continue, you have to sing in');

        return $next($request);
    }
}
