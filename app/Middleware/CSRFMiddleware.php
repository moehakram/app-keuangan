<?php

namespace App\Middleware;

use MA\PHPMVC\Interfaces\Middleware;
use MA\PHPMVC\Interfaces\Request;

class CSRFMiddleware implements Middleware
{
    public function execute(Request $request, callable $next)
    {
        if ($request->isMethod('post')) {
            $token = $request->post('csrf_token') ?? '';
            if ($token === $request->cookie('csrf_token')) return $next($request);
        }

        return response()->setNotFound('CSRF_TOKEN tidak valid !');
    }
}
