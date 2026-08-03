<?php

namespace App\Support;

use Illuminate\Support\Collection;

final class PermissionScope
{
    private const PLATFORM_ONLY_PREFIXES = [
        'permissions.',
        'roles.',
        'tenants.',
        'activity_logs.',
    ];

    public static function isPlatformOnly(string $permission): bool
    {
        return collect(self::PLATFORM_ONLY_PREFIXES)
            ->contains(fn (string $prefix) => str_starts_with($permission, $prefix));
    }

    public static function tenantPermissionIds(Collection $permissions): array
    {
        return $permissions
            ->reject(fn ($permission) => self::isPlatformOnly($permission->name))
            ->pluck('id')
            ->map(fn ($id) => (int) $id)
            ->values()
            ->all();
    }
}
