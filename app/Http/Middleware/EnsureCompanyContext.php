<?php

namespace App\Http\Middleware;

use App\Models\User;
use App\Services\CompanyContextService;
use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class EnsureCompanyContext
{
    public function __construct(
        private readonly CompanyContextService $companyContext
    ) {}

    public function handle(Request $request, Closure $next): Response
    {
        $user = backpack_user();

        if (! $user instanceof User) {
            return $request->expectsJson()
                ? new JsonResponse(['message' => 'Não autenticado.'], 401)
                : redirect()->guest(backpack_url('login'));
        }

        $tenant = $this->companyContext->resolve($user, $request);

        if (! $tenant) {
            abort(403, 'Nenhuma empresa válida está disponível neste contexto.');
        }

        $request->attributes->set('currentTenant', $tenant);
        View::share('currentTenant', $tenant);

        return $next($request);
    }
}
