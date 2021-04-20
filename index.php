<?php
require __DIR__ . '/vendor/autoload.php';

use app\ApplicationAspectKernel;

$applicationAspectKernel = ApplicationAspectKernel::getInstance();
$applicationAspectKernel->init([
    'debug'        => true, // use 'false' for production mode
    'appDir'       => __DIR__ . '/..', // Application root directory
    'cacheDir'     => __DIR__ . '/path/to/cache/for/aop', // Cache directory
    // Include paths restricts the directories where aspects should be applied, or empty for all source files
    'includePaths' => [
        __DIR__ . '/../src/'
    ]
]);





?>
