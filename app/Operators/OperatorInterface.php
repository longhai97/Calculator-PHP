<?php

namespace App\Operators;

interface OperatorInterface
{

    /**
     * @param float $number1
     * @param float $number2
     * @return float
     */
    public function run(float $number1, float $number2): float;
}
