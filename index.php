<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));


$system_dir = __DIR__."/system";

if (file_exists($system_dir.'/storage/framework/maintenance.php')) {
    require $system_dir.'/storage/framework/maintenance.php';
}

require $system_dir.'/vendor/autoload.php';


$app = require_once $system_dir.'/bootstrap/app.php';

$app->bind('path.public', function(){
        return __DIR__."/public";
});

$kernel = $app->make(Kernel::class);

$response = tap($kernel->handle(
    $request = Request::capture()
))->send();

$kernel->terminate($request, $response);
