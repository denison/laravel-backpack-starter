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

        if (! $user || ! $permission || ! $user->hasPermissionTo($permission)) {
            if ($request->expectsJson()) {
                return response()->json(['message' => 'Você não possui permissão para esta ação.'], 403);
            }

            Alert::error('Página não encontrada.')->flash();

            return redirect()->route('backpack.dashboard');
        }

        return $next($request);
    }
}
