<?php

namespace App\Contracts\Repositories;

use App\Models\Tenant;

interface TenantRepositoryInterface extends BaseRepositoryInterface
{
    public function slugExists(string $slug): bool;

    public function optionsFor(?object $user, ?Tenant $currentTenant = null): array;

    public function activeOptionsFor(?object $user): array;
}
