<?php

if ( ! file_exists($file = __DIR__.'/../vendor/autoload.php')) {
    throw new RuntimeException('Install dependencies to run test suite.');
}

$loader = require $file;

$loader->add('RegisterEu\Tests', __DIR__ . '/../tests');
