<?php

namespace App\Repositories;

use App\Contracts\Repositories\RoleRepositoryInterface;
use Illuminate\Support\Collection;

class RoleRepository extends BaseRepository implements RoleRepositoryInterface
{
    protected function modelClass(): string
    {
        return config('permission.models.role');
    }

    public function orderedPermissions(): Collection
    {
        $permissionModel = config('permission.models.permission');

        return $permissionModel::query()
            ->orderBy('name')
            ->get();
    }

    public function syncPermissions(object $role, array $permissionIds): void
    {
        $role->permissions()->sync($permissionIds);
    }
}
