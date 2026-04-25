<?php

namespace App\Providers;

use App\Http\Controllers\Admin\PermissionCrudController as AppPermissionCrudController;
use App\Http\Controllers\Admin\RoleCrudController as AppRoleCrudController;
use App\Http\Controllers\Admin\UserCrudController as AppUserCrudController;
use App\Models\Permission as AppPermission;
use App\Models\Role as AppRole;
use Backpack\PermissionManager\app\Http\Controllers\PermissionCrudController;
use Backpack\PermissionManager\app\Http\Controllers\RoleCrudController;
use Backpack\PermissionManager\app\Http\Controllers\UserCrudController;
use Backpack\PermissionManager\app\Models\Permission;
use Backpack\PermissionManager\app\Models\Role;
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
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
