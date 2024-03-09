<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{

    public function handle(Request $request, Closure $next)
    {
        if (auth()->user() &&  auth()->user()->is_admin == 1 || auth()->user()->is_admin == 2) {
            return $next($request);
        }
        return redirect('/')->with('error', 'Bu Alana Giriş Yapma Yetkiniz Yok');
    }
}
