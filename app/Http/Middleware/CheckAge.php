<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
{
    public function handle(Request $request, Closure $next, $age = 18)
    {
        if ($request->input('age') < $age) {
            return redirect('/access-denied');
        }

        return $next($request);
    }
}
