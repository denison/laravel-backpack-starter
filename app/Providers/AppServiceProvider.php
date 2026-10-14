<?php

namespace App\Providers;

use App\Contracts\Repositories\PermissionRepositoryInterface;
use App\Contracts\Repositories\RoleRepositoryInterface;
use App\Contracts\Repositories\TenantRepositoryInterface;
use App\Contracts\Repositories\UserRepositoryInterface;
use App\Http\Controllers\Admin\PermissionCrudController as AppPermissionCrudController;
use App\Http\Controllers\Admin\RoleCrudController as AppRoleCrudController;
use App\Http\Controllers\Admin\UserCrudController as AppUserCrudController;
use App\Http\Controllers\Auth\LoginController as AppLoginController;
use App\Models\Permission as AppPermission;
use App\Models\Role as AppRole;
use App\Repositories\PermissionRepository;
use App\Repositories\RoleRepository;
use App\Repositories\TenantRepository;
use App\Repositories\UserRepository;
use App\View\Composers\CompanyContextSwitcherComposer;
use Backpack\CRUD\app\Http\Controllers\Auth\LoginController;
use Backpack\PermissionManager\app\Http\Controllers\PermissionCrudController;
use Backpack\PermissionManager\app\Http\Controllers\RoleCrudController;
use Backpack\PermissionManager\app\Http\Controllers\UserCrudController;
use Backpack\PermissionManager\app\Models\Permission;
use Backpack\PermissionManager\app\Models\Role;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(Role::class, AppRole::class);
        $this->app->bind(Permission::class, AppPermission::class);
        $this->app->bind(UserCrudController::class, AppUserCrudController::class);
        $this->app->bind(RoleCrudController::class, AppRoleCrudController::class);
        $this->app->bind(PermissionCrudController::class, AppPermissionCrudController::class);
        $this->app->bind(LoginController::class, AppLoginController::class);

        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(RoleRepositoryInterface::class, RoleRepository::class);
        $this->app->bind(PermissionRepositoryInterface::class, PermissionRepository::class);
        $this->app->bind(TenantRepositoryInterface::class, TenantRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer(
            'admin.topbar.company-context-switcher',
            CompanyContextSwitcherComposer::class
        );
    }
}
