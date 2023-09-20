<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AddCorsHeaders
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        $response
            ->header('Access-Control-Allow-Origin', 'http://portfolio.wlkevin.com')
            ->header('Access-Control-Allow-Methods', 'POST')
            ->header('Access-Control-Allow-Headers', 'Content-Type');
        
        return $response;
    }
}
