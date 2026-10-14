<?php

namespace App\Policies;

use App\Models\User;
use App\Services\CompanyContextService;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    public function __construct(
        private readonly CompanyContextService $companyContext
    ) {}

    public function before(User $actor, string $ability): ?bool
    {
        return $actor->hasRole('super') && ! $this->companyContext->currentTenant()
            ? true
            : null;
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
        $currentTenant = $this->companyContext->currentTenant();

        if ($user->hasRole('super')) {
            return Response::denyAsNotFound();
        }

        if ($currentTenant) {
            return $this->belongsToTenant($user, (int) $currentTenant->getKey());
        }

        if (! $actor->tenant_id) {
            return $user->tenant_id === null
                ? Response::allow()
                : Response::denyAsNotFound();
        }

        return $this->belongsToTenant($user, (int) $actor->tenant_id);
    }

    private function belongsToTenant(User $user, int $tenantId): Response
    {
        $belongsToSameTenant = $tenantId === (int) $user->tenant_id;
        $hasTenantRole = $user->roles()
            ->whereIn('name', ['tenant_admin', 'tenant_administrative'])
            ->exists();

        return $belongsToSameTenant && $hasTenantRole
            ? Response::allow()
            : Response::denyAsNotFound();
    }
}
