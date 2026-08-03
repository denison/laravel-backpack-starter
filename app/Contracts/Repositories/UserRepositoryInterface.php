<?php

namespace App\Contracts\Repositories;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

interface UserRepositoryInterface extends BaseRepositoryInterface
{
    public function applyVisibility(Builder $query, ?object $actor): Builder;

    public function hasOtherActiveSuper(User $user): bool;

    public function rolesAvailableFor(?object $loggedUser): Collection;

    public function permissionsAvailableFor(?object $loggedUser): Collection;

    public function permissionIdsFromRoles(array $roleIds): array;

    public function roleNameById(int $roleId): ?string;

    public function permissionsByIds(array $permissionIds): Collection;

    public function syncRolesAndPermissions(object $user, array $roleIds, array $permissionIds): void;
}
