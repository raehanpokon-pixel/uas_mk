<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {

        /**
         * ----------------------------------------------
         * DAFTARKAN MIDDLEWARE DI SINI
         * ----------------------------------------------
         * Laravel 12 tidak menggunakan Kernel.php
         * Semua middleware harus didefinisikan lewat
         * bootstrap/app.php
         */

        // Middleware untuk autentikasi user
        $middleware->group('auth', [
            \App\Http\Middleware\AuthCheck::class,
        ]);

        // Jika nanti butuh middleware lain (role, admin)
        // tinggal tambahkan di sini.
        //
        // $middleware->group('admin', [
        //     \App\Http\Middleware\AdminOnly::class,
        // ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })
    ->create();
