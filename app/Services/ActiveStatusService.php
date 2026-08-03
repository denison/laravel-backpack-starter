<?php

namespace App\Services;

use App\Contracts\Repositories\TenantRepositoryInterface;
use App\Contracts\Repositories\UserRepositoryInterface;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class ActiveStatusService
{
    public function __construct(
        private readonly UserRepositoryInterface $users,
        private readonly TenantRepositoryInterface $tenants
    ) {}

    public function updateUser(User $user, bool $active): void
    {
        if (! $active && $user->hasRole('super') && ! $this->users->hasOtherActiveSuper($user)) {
            throw ValidationException::withMessages([
                'active' => 'A plataforma precisa manter pelo menos um super ativo.',
            ]);
        }

        $this->users->update($user, ['active' => $active]);
    }

    public function updateTenant(Tenant $tenant, bool $active): void
    {
        $this->tenants->update($tenant, ['active' => $active]);
    }
}
