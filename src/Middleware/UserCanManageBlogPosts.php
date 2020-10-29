<?php

namespace WebDevEtc\BlogEtc\Middleware;

use Closure;
use WebDevEtc\BlogEtc\Helpers;

class UserCanManageBlogPosts
{
    public function handle($request, Closure $next)
    {

        if(!Helpers::hasAdminGateAccess()) {
            return redirect()->guest('login');
        }
        return $next($request);
    }
}
