<?php

namespace App\Middleware;

use MA\PHPMVC\Interfaces\Middleware;
use MA\PHPMVC\Interfaces\Request;

class OnlyMember implements Middleware
{
    public function execute(Request $request, callable $next)
    {
        $user = $request->user();
        if ($user == null) {
            response()->redirect('/login');
        }
        return $next($request);
    }
}
