<?php

namespace App\Services;

use App\Contracts\Repositories\UserRepositoryInterface;

class UserAssignmentService
{
    public function __construct(
        private readonly UserRepositoryInterface $users
    ) {}

    public function validationErrors(?object $actor, array $roleIds, mixed $tenantId): array
    {
        $roleId = collect($roleIds)->filter()->first();
        $roleName = $roleId ? $this->users->roleNameById((int) $roleId) : null;
        $isTenantRole = is_string($roleName) && str_starts_with($roleName, 'tenant_');
        $errors = [];

        if ($isTenantRole && ! $tenantId) {
            $errors['tenant_id'] = 'Selecione a empresa à qual o usuário pertence.';
        }

        if (! $isTenantRole && $tenantId) {
            $errors['tenant_id'] = 'Usuários da plataforma não devem pertencer a uma empresa.';
        }

        if ($actor?->tenant_id) {
            if (! in_array($roleName, ['tenant_admin', 'tenant_administrative'], true)) {
                $errors['roles'] = 'Você só pode cadastrar usuários da sua empresa.';
            }

            if ((int) $tenantId !== (int) $actor->tenant_id) {
                $errors['tenant_id'] = 'Você só pode cadastrar usuários na sua própria empresa.';
            }
        }

        return $errors;
    }
}
