<?php

namespace App\Services;

use App\Contracts\Repositories\TenantRepositoryInterface;
use App\Contracts\Repositories\UserRepositoryInterface;
use App\Models\User;
use App\Support\PermissionScope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\UploadedFile;

class UserService
{
    public function __construct(
        private readonly UserRepositoryInterface $users,
        private readonly TenantRepositoryInterface $tenants,
        private readonly ImageMediaService $images
    ) {}

    public function formData(?object $actor): array
    {
        return [
            'rolesList' => $this->users->rolesAvailableFor($actor),
            'permissionsList' => $this->users->permissionsAvailableFor($actor),
            'tenantOptions' => $this->tenants->optionsFor($actor),
        ];
    }

    public function tenantOptions(?object $actor): array
    {
        return $this->tenants->optionsFor($actor);
    }

    public function applyVisibility(Builder $query, ?object $actor): Builder
    {
        return $this->users->applyVisibility($query, $actor);
    }

    public function syncAvatar(User $user, ?UploadedFile $avatar, bool $remove = false): void
    {
        $this->images->sync($user, 'avatar', $avatar, $remove);
    }

    public function prepareDataForSave(array $data, ?object $actor): array
    {
        $roleId = collect((array) ($data['roles'] ?? []))->filter()->first();
        $roleName = $roleId ? $this->users->roleNameById((int) $roleId) : null;

        if ($actor?->tenant_id) {
            $data['tenant_id'] = $actor->tenant_id;
        } elseif (! is_string($roleName) || ! str_starts_with($roleName, 'tenant_')) {
            $data['tenant_id'] = null;
        }

        if (empty($data['password'])) {
            unset($data['password']);
        }

        return $data;
    }

    public function syncRolesAndPermissions(
        ?object $actor,
        ?object $user,
        array $roleIds,
        array $permissionIds
    ): void {
        if (! $user) {
            return;
        }

        $roleIds = $this->normalizeIds($roleIds, true);
        $permissionIds = $this->normalizeIds($permissionIds);
        $targetRoleName = ! empty($roleIds)
            ? $this->users->roleNameById($roleIds[0])
            : null;

        if (is_string($targetRoleName) && str_starts_with($targetRoleName, 'tenant_')) {
            $permissionIds = PermissionScope::tenantPermissionIds(
                $this->users->permissionsByIds($permissionIds)
            );
        }

        if ($actor?->tenant_id) {
            $allowedPermissionIds = $actor
                ->getAllPermissions()
                ->pluck('id')
                ->map(fn ($id) => (int) $id)
                ->all();

            $permissionIds = array_values(array_intersect($permissionIds, $allowedPermissionIds));
        }

        $rolePermissionIds = $this->users->permissionIdsFromRoles($roleIds);
        $extraPermissionIds = array_values(array_diff($permissionIds, $rolePermissionIds));

        $this->users->syncRolesAndPermissions($user, $roleIds, $extraPermissionIds);
    }

    private function normalizeIds(array $ids, bool $single = false): array
    {
        $ids = collect($ids)
            ->filter()
            ->map(fn ($id) => (int) $id)
            ->unique()
            ->values()
            ->all();

        return $single ? array_slice($ids, 0, 1) : $ids;
    }
}
