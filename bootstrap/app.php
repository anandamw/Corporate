<?php

use App\Http\Middleware\HakAksesMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'role' => HakAksesMiddleware::class,
            'Excel' => Maatwebsite\Excel\Facades\Excel::class,
            'Alert' => RealRashid\SweetAlert\Facades\Alert::class,
            'LaravelPwa' => \Ladumor\LaravelPwa\LaravelPwa::class,
        ]);
    })

    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
