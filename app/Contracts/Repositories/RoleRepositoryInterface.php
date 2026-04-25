<?php

namespace App\Contracts\Repositories;

use Illuminate\Support\Collection;

interface RoleRepositoryInterface extends BaseRepositoryInterface
{
    public function orderedPermissions(): Collection;

    public function syncPermissions(object $role, array $permissionIds): void;
}
