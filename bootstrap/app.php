<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Adding 'safty' middleware to the middleware stack.
        $middleware->group('safty', [
            \App\Http\Middleware\WebSafty::class, // Add your custom safty middleware here
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();