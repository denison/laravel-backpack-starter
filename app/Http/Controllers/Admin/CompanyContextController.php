<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tenant;
use App\Models\User;
use App\Services\CompanyContextService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CompanyContextController extends Controller
{
    public function store(
        Request $request,
        Tenant $tenant,
        CompanyContextService $companyContext
    ): RedirectResponse {
        $user = backpack_user();

        abort_unless($user instanceof User, 401);

        $companyContext->select($user, $tenant, $request);

        return redirect()->route('backpack.company.dashboard');
    }

    public function destroy(
        Request $request,
        CompanyContextService $companyContext
    ): RedirectResponse {
        $user = backpack_user();

        abort_unless($user instanceof User, 401);

        $companyContext->clear($user, $request);

        return redirect()->to(backpack_url('user'));
    }

    public function update(
        Request $request,
        CompanyContextService $companyContext
    ): RedirectResponse {
        $user = backpack_user();

        abort_unless($user instanceof User, 401);

        $validated = $request->validate([
            'tenant_id' => ['required', 'integer'],
            'redirect_to' => ['nullable', 'string', 'max:2048'],
        ]);

        $companyContext->selectById($user, (int) $validated['tenant_id'], $request);

        return $this->redirectToCompanyPage($validated['redirect_to'] ?? null);
    }

    private function redirectToCompanyPage(?string $target): RedirectResponse
    {
        $companyPath = '/'.trim(config('backpack.base.route_prefix', 'app'), '/').'/company';
        $targetPath = is_string($target) ? parse_url($target, PHP_URL_PATH) : null;
        $isCompanyPath = $targetPath === $companyPath
            || (is_string($targetPath) && Str::startsWith($targetPath, "{$companyPath}/"));

        if (is_string($target) && Str::startsWith($target, '/') && ! Str::startsWith($target, '//') && $isCompanyPath) {
            return redirect()->to($target);
        }

        return redirect()->route('backpack.company.dashboard');
    }
}
