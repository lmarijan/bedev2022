<?php

use Core\Application;
use Core\Bootstrap;

define('ROOT', realpath(__DIR__ . '/../'));

require ROOT . '/vendor/autoload.php';

$bootstrap = new Bootstrap;
$bootstrap->boot();

$application = new Application();
$application->run();