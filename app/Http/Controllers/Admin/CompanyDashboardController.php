<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tenant;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CompanyDashboardController extends Controller
{
    public function __invoke(Request $request): View
    {
        $currentTenant = $request->attributes->get('currentTenant');

        abort_unless($currentTenant instanceof Tenant, 403);

        return view('admin.company.dashboard', [
            'title' => 'Ambiente da empresa',
            'currentTenant' => $currentTenant,
        ]);
    }
}
