<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Backpack\CRUD\app\Http\Controllers\Auth\LoginController as BackpackLoginController;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LoginController extends BackpackLoginController
{
    protected function authenticated(Request $request, $user): ?RedirectResponse
    {
        if (
            $user instanceof User
            && $user->hasAnyRole(['tenant_admin', 'tenant_administrative'])
        ) {
            return redirect()->route('backpack.company.dashboard');
        }

        return null;
    }
}
