<?php

namespace App\Services;

use App\Contracts\Repositories\RoleRepositoryInterface;
use Illuminate\Support\Collection;

class RoleService
{
    public function __construct(
        private readonly RoleRepositoryInterface $roles
    ) {
    }

    public function permissionsForForm(): Collection
    {
        return $this->roles->orderedPermissions();
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
            ->all();

        $this->roles->syncPermissions($role, $permissionIds);
    }
}
