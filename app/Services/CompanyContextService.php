<?php

namespace App\Services;

use App\Contracts\Repositories\TenantRepositoryInterface;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Http\Request;

class CompanyContextService
{
    private const SESSION_KEY = 'company_context_tenant_id';

    public function __construct(
        private readonly TenantRepositoryInterface $tenants
    ) {}

    public function resolve(User $user, Request $request): ?Tenant
    {
        if ($user->tenant_id) {
            if (! $user->hasAnyRole(['tenant_admin', 'tenant_administrative'])) {
                return null;
            }

            $tenantId = $user->tenant_id;
        } else {
            if (! $user->can('tenants.access')) {
                return null;
            }

            $tenantId = $request->session()->get(self::SESSION_KEY);
        }

        if (! $tenantId) {
            return null;
        }

        $tenant = $this->tenants->find((int) $tenantId);

        return $tenant instanceof Tenant && $tenant->active && ! $tenant->trashed()
            ? $tenant
            : null;
    }

    public function select(User $user, Tenant $tenant, Request $request): void
    {
        abort_if($user->tenant_id, 403);
        abort_unless($user->can('tenants.access'), 403);
        abort_unless($tenant->active && ! $tenant->trashed(), 403);

        $request->session()->put(self::SESSION_KEY, $tenant->getKey());
    }

    public function selectById(User $user, int $tenantId, Request $request): void
    {
        $tenant = $this->tenants->find($tenantId);

        abort_unless($tenant instanceof Tenant, 404);

        $this->select($user, $tenant, $request);
    }

    public function optionsFor(User $user): array
    {
        return $this->tenants->activeOptionsFor($user);
    }

    public function clear(User $user, Request $request): void
    {
        abort_if($user->tenant_id, 403);

        $request->session()->forget(self::SESSION_KEY);
    }

    public function currentTenant(): ?Tenant
    {
        $tenant = request()->attributes->get('currentTenant');

        return $tenant instanceof Tenant ? $tenant : null;
    }
}
