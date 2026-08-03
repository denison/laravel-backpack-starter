<?php

namespace App\Services;

use App\Contracts\Repositories\RoleRepositoryInterface;
use App\Support\PermissionScope;
use Illuminate\Support\Collection;

class RoleService
{
    public function __construct(
        private readonly RoleRepositoryInterface $roles
    ) {}

    public function permissionsForForm(?object $role = null): Collection
    {
        $permissions = $this->roles->orderedPermissions();

        if (! $this->isTenantRole($role)) {
            return $permissions;
        }

        return $permissions
            ->reject(fn ($permission) => PermissionScope::isPlatformOnly($permission->name))
            ->values();
    }

    public function syncPermissions(?object $role, array $permissionIds): void
    {
        if (! $role) {
            return;
        }

        $permissionIds = collect($permissionIds)
            ->filter()
            ->map(fn ($id) => (int) $id)
            ->unique()
            ->values()
            ->when(
                $this->isTenantRole($role),
                fn (Collection $ids) => $ids->intersect(
                    $this->permissionsForForm($role)->pluck('id')
                )
            )
            ->all();

        $this->roles->syncPermissions($role, $permissionIds);
    }

    private function isTenantRole(?object $role): bool
    {
        return is_string($role?->name) && str_starts_with($role->name, 'tenant_');
    }
}
