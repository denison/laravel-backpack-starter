<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserRouteContext
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = backpack_user();

        if (
            ! $user instanceof User
            || ! $user->hasAnyRole(['tenant_admin', 'tenant_administrative'])
            || $request->routeIs('backpack.company.*')
        ) {
            return $next($request);
        }

        if (! $request->isMethodSafe()) {
            abort(403);
        }

        $routePrefix = trim(config('backpack.base.route_prefix', 'app'), '/');
        $suffix = Str::after($request->path(), "{$routePrefix}/user");
        $target = backpack_url("company/user{$suffix}");

        if ($query = $request->getQueryString()) {
            $target .= "?{$query}";
        }

        return redirect()->to($target);
    }
}
