<?php

namespace App\Middleware;

use Closure;
use MA\PHPMVC\Utility\Config;
use MA\PHPMVC\Interfaces\Middleware;
use MA\PHPMVC\Interfaces\Request;

class OnlyGuest implements Middleware
{
    public function execute(Request $request, callable $next)
    {
        $user = $request->user();
        if ($user != null) {
            response()->redirect('/');
        }
        return $next($request);
    }
}
