<?php

use App\Http\Middleware\CheckPermissionFromRoute;
use App\Http\Middleware\EnsureCompanyContext;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Prologue\Alerts\Facades\Alert;
use Symfony\Component\HttpFoundation\Response;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        channels: __DIR__.'/../routes/channels.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // Laravel 13: aliases de middleware ficam aqui, no lugar do antigo app/Http/Kernel.php.
        $middleware->alias([
            'check.permission' => CheckPermissionFromRoute::class,
            'company.context' => EnsureCompanyContext::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->respond(function (Response $response): Response {
            $request = request();
            $routePrefix = trim(config('backpack.base.route_prefix', 'app'), '/');
            $isBackpackRoute = $request->is($routePrefix, "{$routePrefix}/*");

            if (
                $response->getStatusCode() !== Response::HTTP_NOT_FOUND
                || ! $isBackpackRoute
                || $request->expectsJson()
                || ! backpack_auth()->check()
            ) {
                return $response;
            }

            $previousUrl = $request->headers->get('referer');
            $previousScheme = $previousUrl ? parse_url($previousUrl, PHP_URL_SCHEME) : null;
            $previousHost = $previousUrl ? parse_url($previousUrl, PHP_URL_HOST) : null;
            $previousPort = $previousUrl ? parse_url($previousUrl, PHP_URL_PORT) : null;
            $isSameOrigin = $previousScheme === $request->getScheme()
                && $previousHost === $request->getHost()
                && ($previousPort ?? $request->getPort()) === $request->getPort();
            $isCurrentPage = $previousUrl
                && rtrim($previousUrl, '/') === rtrim($request->fullUrl(), '/');

            $destination = $isSameOrigin && ! $isCurrentPage
                ? $previousUrl
                : route('backpack.dashboard');

            Alert::warning('Página não encontrada.')->flash();

            return redirect()->to($destination);
        });
    })->create();
