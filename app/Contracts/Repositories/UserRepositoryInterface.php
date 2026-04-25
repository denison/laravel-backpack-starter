<?php

namespace App\Contracts\Repositories;

use Illuminate\Support\Collection;

interface UserRepositoryInterface extends BaseRepositoryInterface
{
    public function rolesAvailableFor(?object $loggedUser): Collection;

    public function permissionsAvailableFor(?object $loggedUser): Collection;

    public function permissionIdsFromRoles(array $roleIds): array;

    public function syncRolesAndPermissions(object $user, array $roleIds, array $permissionIds): void;
}
