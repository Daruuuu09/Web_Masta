<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Middleware; // ✅ ini adalah type hint yang BENAR
use App\Http\Middleware\VerifyCsrfToken;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
    )
    ->withMiddleware(function (Middleware $middleware) { // ✅ ini benar
        $middleware->web(VerifyCsrfToken::class);
    })
    ->withExceptions(function ($exceptions) {
        //
    })
    ->create();
