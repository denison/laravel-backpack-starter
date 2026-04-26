<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Prologue\Alerts\Facades\Alert;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        channels: __DIR__.'/../routes/channels.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // Laravel 12: aliases de middleware ficam aqui, no lugar do antigo app/Http/Kernel.php.
        $middleware->alias([
            'check.permission' => \App\Http\Middleware\CheckPermissionFromRoute::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->render(function (ModelNotFoundException $e, $request) {
            if ($request->is(trim(config('backpack.base.route_prefix', 'admin'), '/').'*')) {
                Alert::error('Pagina nao existe.')->flash();

                return redirect()->route('backpack.dashboard');
            }

            return null;
        });
    })->create();
