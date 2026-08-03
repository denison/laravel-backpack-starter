<?php

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
    Route::get('postal-code/{postalCode}', 'PostalCodeLookupController')
        ->where('postalCode', '[0-9]{8}')
        ->name('postal-code.lookup');

    Route::patch('user/{user}/active', 'ActiveStatusController@user')
        ->middleware('check.permission:users.edit')
        ->name('users.active.update');

    Route::patch('tenant/{tenant}/active', 'ActiveStatusController@tenant')
        ->middleware('check.permission:tenants.edit')
        ->name('tenants.active.update');

    Route::crud('activity-log', 'ActivityLogCrudController');
    Route::crud('tenant', 'TenantCrudController');
}); // this should be the absolute last line of this file

/**
 * DO NOT ADD ANYTHING HERE.
 */
