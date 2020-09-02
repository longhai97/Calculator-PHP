<?php

require_once './vendor/autoload.php';

use App\Calculator;
use Illuminate\Container\Container;

$config = require('./config.php');
$container = Container::getInstance();

$container->bind('config', function () use ($config) {
    return $config;
});

foreach ($config['services'] as $bootstrap) {
    $bootstrap->run();
}

/** @var Calculator $calculator */
$calculator = Container::getInstance()->make(Calculator::class);

var_dump($calculator->calculate('+', 1, 4));
