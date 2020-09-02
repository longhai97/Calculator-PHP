<?php

namespace App\Operators;

class Subtraction implements OperatorInterface
{
    /**
     * @param float $number1
     * @param float $number2
     * @return float
     */
    public function run(float $number1, float $number2): float
    {
        return $number1 - $number2;
    }
}
