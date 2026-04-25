<?php

namespace App\Repositories;

use App\Contracts\Repositories\UserRepositoryInterface;
use Illuminate\Support\Collection;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    protected function modelClass(): string
    {
        return config('backpack.permissionmanager.models.user');
    }

    public function rolesAvailableFor(?object $loggedUser): Collection
    {
        $roleModel = config('permission.models.role');

        $query = $roleModel::query()
            ->with('permissions:id,name,display_name')
            ->orderBy('name');

        if ($loggedUser && method_exists($loggedUser, 'hasRole') && ! $loggedUser->hasRole('super')) {
            $query->where('name', '!=', 'super');
        }

        return $query->get();
    }

    public function permissionsAvailableFor(?object $loggedUser): Collection
    {
        $permissionModel = config('permission.models.permission');

        $query = $permissionModel::query()->orderBy('name');

        if ($loggedUser && method_exists($loggedUser, 'hasRole') && ! $loggedUser->hasRole('super')) {
            $query->whereIn('id', $loggedUser->getAllPermissions()->pluck('id')->all());
        }

        return $query->get();
    }

    public function permissionIdsFromRoles(array $roleIds): array
    {
        if (empty($roleIds)) {
            return [];
        }

        $roleModel = config('permission.models.role');

        return $roleModel::query()
            ->whereIn('id', $roleIds)
            ->with('permissions:id')
            ->get()
            ->flatMap(fn ($role) => $role->permissions->pluck('id'))
            ->map(fn ($id) => (int) $id)
            ->unique()
            ->values()
            ->all();
    }

    public function syncRolesAndPermissions(object $user, array $roleIds, array $permissionIds): void
    {
        $user->roles()->sync($roleIds);
        $user->permissions()->sync($permissionIds);
    }
}
