<?php

namespace App\Contracts\Repositories;

interface TenantRepositoryInterface extends BaseRepositoryInterface
{
    public function slugExists(string $slug): bool;

    public function optionsFor(?object $user): array;
}
