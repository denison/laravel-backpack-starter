<?php

namespace App\Repositories;

use App\Contracts\Repositories\UserRepositoryInterface;
use App\Models\User;
use App\Services\CompanyContextService;
use App\Support\PermissionScope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function __construct(
        private readonly CompanyContextService $companyContext
    ) {}

    protected function modelClass(): string
    {
        return config('backpack.permissionmanager.models.user');
    }

    public function applyVisibility(Builder $query, ?object $actor): Builder
    {
        if (! $actor) {
            return $query->whereRaw('1 = 0');
        }

        $currentTenant = $this->companyContext->currentTenant();

        if ($currentTenant || $actor->tenant_id) {
            $tenantId = $currentTenant?->getKey() ?? $actor->tenant_id;

            return $query
                ->where('tenant_id', $tenantId)
                ->whereHas('roles', function (Builder $roleQuery): void {
                    $roleQuery->whereIn('name', ['tenant_admin', 'tenant_administrative']);
                });
        }

        $query->whereNull('tenant_id');

        if (! $actor->hasRole('super')) {
            $query->whereDoesntHave('roles', function (Builder $roleQuery): void {
                $roleQuery->where('name', 'super');
            });
        }

        return $query;
    }

    public function hasOtherActiveSuper(User $user): bool
    {
        return $this->query()
            ->whereKeyNot($user->getKey())
            ->where('active', true)
            ->role('super')
            ->exists();
    }

    public function rolesAvailableFor(?object $loggedUser): Collection
    {
        $roleModel = config('permission.models.role');

        $query = $roleModel::query()
            ->with('permissions:id,name,display_name')
            ->orderBy('name');

        if ($this->companyContext->currentTenant() || $loggedUser?->tenant_id) {
            return $query
                ->whereIn('name', ['tenant_admin', 'tenant_administrative'])
                ->get();
        }

        if ($loggedUser && method_exists($loggedUser, 'hasRole') && ! $loggedUser->hasRole('super')) {
            $query->where('name', '!=', 'super');
        }

        return $query->get();
    }

    public function permissionsAvailableFor(?object $loggedUser): Collection
    {
        $permissionModel = config('permission.models.permission');

        $query = $permissionModel::query()->orderBy('name');

        if ($loggedUser && method_exists($loggedUser, 'hasRole') && ! $loggedUser->hasRole('super')) {
            $query->whereIn('id', $loggedUser->getAllPermissions()->pluck('id')->all());
        }

        $permissions = $query->get();

        if ($this->companyContext->currentTenant() || $loggedUser?->tenant_id) {
            return $permissions
                ->reject(fn ($permission) => PermissionScope::isPlatformOnly($permission->name))
                ->values();
        }

        return $permissions;
    }

    public function permissionIdsFromRoles(array $roleIds): array
    {
        if (empty($roleIds)) {
            return [];
        }

        $roleModel = config('permission.models.role');

        return $roleModel::query()
            ->whereIn('id', $roleIds)
            ->with('permissions:id')
            ->get()
            ->flatMap(fn ($role) => $role->permissions->pluck('id'))
            ->map(fn ($id) => (int) $id)
            ->unique()
            ->values()
            ->all();
    }

    public function roleNameById(int $roleId): ?string
    {
        $roleModel = config('permission.models.role');

        return $roleModel::query()->whereKey($roleId)->value('name');
    }

    public function permissionsByIds(array $permissionIds): Collection
    {
        $permissionModel = config('permission.models.permission');

        return $permissionModel::query()
            ->whereIn('id', $permissionIds)
            ->get(['id', 'name']);
    }

    public function syncRolesAndPermissions(object $user, array $roleIds, array $permissionIds): void
    {
        $user->roles()->sync($roleIds);
        $user->permissions()->sync($permissionIds);
    }
}
