<?php

use App\Http\Middleware\EnsureUserRouteContext;
use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\CRUD.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'app'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace' => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::get('dashboard', 'DashboardController')
        ->name('backpack.dashboard');

    Route::get('/', fn () => redirect()->route('backpack.dashboard'))
        ->name('backpack');

    Route::get('postal-code/{postalCode}', 'PostalCodeLookupController')
        ->where('postalCode', '[0-9]{8}')
        ->name('postal-code.lookup');

    Route::patch('user/{user}/active', 'ActiveStatusController@user')
        ->middleware([
            EnsureUserRouteContext::class,
            'check.permission:users.edit',
        ])
        ->name('users.active.update');

    Route::patch('tenant/{tenant}/active', 'ActiveStatusController@tenant')
        ->middleware('check.permission:tenants.edit')
        ->name('tenants.active.update');

    Route::crud('activity-log', 'ActivityLogCrudController');
    Route::crud('tenant', 'TenantCrudController');

    Route::post('company/{tenant}/enter', 'CompanyContextController@store')
        ->middleware('check.permission:tenants.access')
        ->name('backpack.company.enter');

    Route::delete('company/context', 'CompanyContextController@destroy')
        ->name('backpack.company.context.destroy');

    Route::patch('company/context', 'CompanyContextController@update')
        ->middleware('check.permission:tenants.access')
        ->name('backpack.company.context.update');

    Route::prefix('company')
        ->middleware('company.context')
        ->as('backpack.company.')
        ->group(function (): void {
            Route::get('/', 'CompanyDashboardController')
                ->name('dashboard');

            Route::patch('user/{user}/active', 'ActiveStatusController@user')
                ->middleware('check.permission:users.edit')
                ->name('users.active.update');

            Route::crud('user', 'UserCrudController');
        });
}); // this should be the absolute last line of this file

/**
 * DO NOT ADD ANYTHING HERE.
 */
