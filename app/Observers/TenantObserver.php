<?php

namespace App\Observers;

use App\Models\Tenant;
use App\Services\TenantService;

class TenantObserver
{
    public function __construct(
        private readonly TenantService $tenantService
    ) {}

    public function creating(Tenant $tenant): void
    {
        if (! $tenant->slug) {
            $tenant->slug = $this->tenantService->uniqueSlug($tenant->name);
        }
    }
}
