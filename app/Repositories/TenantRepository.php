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

    public function optionsFor(?object $user, ?Tenant $currentTenant = null): array
    {
        $query = Tenant::query()->orderBy('name');

        if ($currentTenant) {
            $query->whereKey($currentTenant->getKey());
        } elseif ($user?->tenant_id) {
            $query->whereKey($user->tenant_id);
        }

        return $query->pluck('name', 'id')->all();
    }

    public function activeOptionsFor(?object $user): array
    {
        $query = Tenant::query()
            ->where('active', true)
            ->orderBy('name');

        if ($user?->tenant_id) {
            $query->whereKey($user->tenant_id);
        } elseif (! $user || ! method_exists($user, 'can') || ! $user->can('tenants.access')) {
            $query->whereRaw('1 = 0');
        }

        return $query->pluck('name', 'id')->all();
    }

    protected function modelClass(): string
    {
        return Tenant::class;
    }
}
