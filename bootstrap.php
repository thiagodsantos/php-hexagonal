<?php

use Dotenv\Dotenv;

date_default_timezone_set('America/Sao_Paulo');

require __DIR__ . '/vendor/autoload.php';

(Dotenv::create(__DIR__))->load();