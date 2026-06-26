<?php

// Create writable directories in /tmp (Vercel filesystem is read-only except /tmp)
$dirs = [
    '/tmp/laravel/storage/framework/views',
    '/tmp/laravel/storage/framework/cache/data',
    '/tmp/laravel/storage/framework/sessions',
    '/tmp/laravel/storage/logs',
    '/tmp/laravel/storage/app',
];

foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

define('LARAVEL_START', microtime(true));

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

// Point writable storage to /tmp
$app->useStoragePath('/tmp/laravel/storage');

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
