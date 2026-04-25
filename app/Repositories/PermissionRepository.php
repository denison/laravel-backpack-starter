<?php

namespace App\Repositories;

use App\Contracts\Repositories\PermissionRepositoryInterface;
use Illuminate\Support\Collection;

class PermissionRepository extends BaseRepository implements PermissionRepositoryInterface
{
    protected function modelClass(): string
    {
        return config('permission.models.permission');
    }

    public function ordered(): Collection
    {
        $permissionModel = config('permission.models.permission');

        return $permissionModel::query()
            ->orderBy('name')
            ->get();
    }
}
