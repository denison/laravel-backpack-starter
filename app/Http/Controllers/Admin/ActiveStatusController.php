<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tenant;
use App\Models\User;
use App\Services\ActiveStatusService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Gate;

class ActiveStatusController extends Controller
{
    public function user(Request $request, User $user, ActiveStatusService $service): JsonResponse
    {
        Gate::forUser(backpack_user())->authorize('update', $user);

        $active = $this->validatedStatus($request);
        $service->updateUser($user, $active);

        return $this->response(
            $active ? 'Usuário ativado com sucesso.' : 'Usuário desativado com sucesso.',
            $active
        );
    }

    public function tenant(Request $request, Tenant $tenant, ActiveStatusService $service): JsonResponse
    {
        $active = $this->validatedStatus($request);
        $service->updateTenant($tenant, $active);

        return $this->response(
            $active ? 'Empresa ativada com sucesso.' : 'Empresa desativada com sucesso.',
            $active
        );
    }

    private function validatedStatus(Request $request): bool
    {
        return (bool) $request->validate([
            'active' => ['required', 'boolean'],
        ])['active'];
    }

    private function response(string $message, bool $active): JsonResponse
    {
        return response()->json([
            'active' => $active,
            'message' => $message,
        ]);
    }
}
