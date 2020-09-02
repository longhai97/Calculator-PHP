<?php

namespace VendorBootstrap;

use Illuminate\Container\Container;
use Monolog\Logger;
use Psr\Log\LoggerInterface;

class MonologgerBootstrap {

    public function run()
    {
        $container = Container::getInstance();
        $container->bind(LoggerInterface::class, function () use ($container) {
            $config = $container->make('config');

            return new Logger('app', $config['logger']['handlers']);
        });
    }
}
