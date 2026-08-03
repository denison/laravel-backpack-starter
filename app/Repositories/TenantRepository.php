<?php

namespace App\Repositories;

use App\Contracts\Repositories\TenantRepositoryInterface;
use App\Models\Tenant;

class TenantRepository extends BaseRepository implements TenantRepositoryInterface
{
    public function slugExists(string $slug): bool
    {
        return Tenant::query()->withTrashed()->where('slug', $slug)->exists();
    }

    public function optionsFor(?object $user): array
    {
        $query = Tenant::query()->orderBy('name');

        if ($user?->tenant_id) {
            $query->whereKey($user->tenant_id);
        }

        return $query->pluck('name', 'id')->all();
    }

    protected function modelClass(): string
    {
        return Tenant::class;
    }
}
