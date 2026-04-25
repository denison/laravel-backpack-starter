<?php

namespace App\Services;

use App\Contracts\Repositories\PermissionRepositoryInterface;
use Illuminate\Support\Collection;

class PermissionService
{
    public function __construct(
        private readonly PermissionRepositoryInterface $permissions
    ) {
    }

    public function ordered(): Collection
    {
        return $this->permissions->ordered();
    }
}
