<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class DashboardController extends Controller
{
    public function __invoke(): View|RedirectResponse
    {
        $user = backpack_user();

        abort_unless($user instanceof User, 403);

        if ($user->hasAnyRole(['tenant_admin', 'tenant_administrative'])) {
            return redirect()->route('backpack.company.dashboard');
        }

        return view(backpack_view('dashboard'), [
            'title' => trans('backpack::base.dashboard'),
        ]);
    }
}
