<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{

    public function handle(Request $request, Closure $next): Response
    {
        if (session()->has('user')){
            if (session()->get('user')->role_id == 1){
                return $next($request);
            }
        }

        return redirect()->route('home');
    }
}
