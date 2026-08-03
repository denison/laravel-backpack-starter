<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Prologue\Alerts\Facades\Alert;
use Symfony\Component\HttpFoundation\Response;

class EnsureAccountIsActive
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = backpack_auth()->user();

        if (! $user) {
            return $request->expectsJson()
                ? response()->json(['message' => 'Não autenticado.'], 401)
                : redirect()->guest(backpack_url('login'));
        }

        if (! $user->active) {
            return $this->reject(
                $request,
                'Este usuário está inativo.',
                'Este usuário está inativo. Entre em contato com o responsável.'
            );
        }

        if ($user->tenant_id) {
            $tenant = $user->tenant()->withTrashed()->first();

            if (! $tenant || ! $tenant->active || $tenant->trashed()) {
                return $this->reject(
                    $request,
                    'Esta empresa está inativa.',
                    'Esta empresa está inativa. Entre em contato com o responsável.'
                );
            }
        }

        return $next($request);
    }

    private function reject(Request $request, string $jsonMessage, string $alertMessage): Response
    {
        backpack_auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        if ($request->expectsJson()) {
            return response()->json(['message' => $jsonMessage], 403);
        }

        Alert::error($alertMessage)->flash();

        return redirect()->route('backpack.auth.login');
    }
}
