<?php

namespace App\Contracts\Repositories;

use Illuminate\Support\Collection;

interface PermissionRepositoryInterface extends BaseRepositoryInterface
{
    public function ordered(): Collection;
}
