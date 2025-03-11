<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserEnabled
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->habilitado == 0) {
            return redirect()->route('validarEmail');
        }

        return $next($request);
    }
}
