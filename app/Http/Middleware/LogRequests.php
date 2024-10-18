<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LogRequests
{
    public function handle(Request $request, Closure $next)
    {
        $log = sprintf("[%s] %s %s\n", now(), $request->method(), $request->url());
        file_put_contents(storage_path('logs/log.txt'), $log, FILE_APPEND);

        return $next($request);
    }
}
