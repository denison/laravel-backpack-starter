<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    public function before(User $actor, string $ability): ?bool
    {
        return $actor->hasRole('super') ? true : null;
    }

    public function viewAny(User $actor): bool
    {
        return true;
    }

    public function create(User $actor): bool
    {
        return true;
    }

    public function view(User $actor, User $user): Response
    {
        return $this->canAccess($actor, $user);
    }

    public function update(User $actor, User $user): Response
    {
        return $this->canAccess($actor, $user);
    }

    public function delete(User $actor, User $user): Response
    {
        return $this->canAccess($actor, $user);
    }

    private function canAccess(User $actor, User $user): Response
    {
        if ($user->hasRole('super')) {
            return Response::denyAsNotFound();
        }

        if (! $actor->tenant_id) {
            return Response::allow();
        }

        $belongsToSameTenant = (int) $actor->tenant_id === (int) $user->tenant_id;
        $hasTenantRole = $user->roles()->whereIn('name', ['tenant_admin', 'tenant_administrative'])->exists();

        return $belongsToSameTenant && $hasTenantRole
            ? Response::allow()
            : Response::denyAsNotFound();
    }
}
