<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Prologue\Alerts\Facades\Alert;
use Symfony\Component\HttpFoundation\Response;

class CheckPermissionFromRoute
{
    public function handle(Request $request, Closure $next, $permission = null): Response
    {
        $user = backpack_user();

        if (! $user) {
            Alert::error('Pagina nao existe.')->flash();

            return redirect()->route('backpack.dashboard');
        }

        if (! $permission) {
            Alert::error('Pagina nao existe.')->flash();

            return redirect()->route('backpack.dashboard');
        }

        if (! $user->can($permission)) {
            Alert::error('Pagina nao existe.')->flash();

            return redirect()->route('backpack.dashboard');
        }

        return $next($request);
    }
}
