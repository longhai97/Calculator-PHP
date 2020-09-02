<?php

namespace App;

use App\Operators\Multiplication;
use App\Operators\Subtraction;
use App\Operators\Sum;
use Illuminate\Container\Container;
use Psr\Log\LoggerInterface;


class Bootstrap {

    public function run()
    {

        $container = Container::getInstance();

        $container->bind(Calculator::class, function () use ($container) {

            $calculator = new Calculator($container->make(LoggerInterface::class));
            $calculator
                ->register('+', new Sum())
                ->register('-', new Subtraction())
                ->register('x', new Multiplication())
            ;

            return $calculator;
        });
    }
}