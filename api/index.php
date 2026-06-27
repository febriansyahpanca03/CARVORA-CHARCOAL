<?php

// Create writable dirs in /tmp (Vercel read-only filesystem)
foreach ([
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
    '/tmp/storage/app/public',
] as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

// Force environment overrides for serverless
putenv('DB_CONNECTION=sqlite');
putenv('DB_DATABASE=/tmp/database.sqlite');
putenv('CACHE_DRIVER=array');
putenv('SESSION_DRIVER=cookie');
putenv('LOG_CHANNEL=stderr');
putenv('QUEUE_CONNECTION=sync');
putenv('FILESYSTEM_DISK=local');

$_ENV['DB_CONNECTION']    = 'sqlite';
$_ENV['DB_DATABASE']      = '/tmp/database.sqlite';
$_ENV['CACHE_DRIVER']     = 'array';
$_ENV['SESSION_DRIVER']   = 'cookie';
$_ENV['LOG_CHANNEL']      = 'stderr';
$_ENV['QUEUE_CONNECTION'] = 'sync';

define('LARAVEL_START', microtime(true));

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

$app->useStoragePath('/tmp/storage');

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
