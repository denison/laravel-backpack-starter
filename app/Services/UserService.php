<?php

namespace App\Services;

use App\Contracts\Repositories\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public function __construct(
        private readonly UserRepositoryInterface $users
    ) {}

    public function formData(?object $loggedUser): array
    {
        return [
            'rolesList' => $this->users->rolesAvailableFor($loggedUser),
            'permissionsList' => $this->users->permissionsAvailableFor($loggedUser),
        ];
    }

    public function prepareRequestForSave(Request $request): Request
    {
        $request->request->remove('password_confirmation');
        $request->request->remove('roles_show');
        $request->request->remove('permissions_show');

        if ($request->input('password')) {
            $request->request->set('password', Hash::make($request->input('password')));
        } else {
            $request->request->remove('password');
        }

        return $request;
    }

    public function syncRolesAndPermissions(?object $user, array $roleIds, array $permissionIds): void
    {
        if (! $user) {
            return;
        }

        $roleIds = $this->normalizeIds($roleIds, true);
        $permissionIds = $this->normalizeIds($permissionIds);

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
