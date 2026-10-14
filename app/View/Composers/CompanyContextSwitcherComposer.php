<?php

namespace App\View\Composers;

use App\Models\Tenant;
use App\Models\User;
use App\Services\CompanyContextService;
use Illuminate\View\View;

class CompanyContextSwitcherComposer
{
    public function __construct(
        private readonly CompanyContextService $companyContext
    ) {}

    public function compose(View $view): void
    {
        $user = backpack_user();
        $currentTenant = $this->companyContext->currentTenant();
        $isPlatformUser = $user instanceof User && ! $user->tenant_id;

        $view->with([
            'currentTenant' => $currentTenant instanceof Tenant ? $currentTenant : null,
            'isPlatformUser' => $isPlatformUser,
            'companyOptions' => $isPlatformUser
                ? $this->companyContext->optionsFor($user)
                : [],
        ]);
    }
}
