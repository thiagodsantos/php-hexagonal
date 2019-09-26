<?php

use Dotenv\Dotenv;
use Slim\Factory\AppFactory;

date_default_timezone_set('America/Sao_Paulo');

require __DIR__ . '/vendor/autoload.php';

$app = AppFactory::create();

require __DIR__ . '/config/container.php';
require __DIR__ . '/config/routes.php';

(Dotenv::create(__DIR__))->load();