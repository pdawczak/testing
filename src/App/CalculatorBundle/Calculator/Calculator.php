<?php

namespace App\CalculatorBundle\Calculator;

class Calculator
{
    /**
     * @return Calculator
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @param number $leftNumber
     * @param number $rightNumber
     * @return number
     */
    public function add($leftNumber, $rightNumber)
    {
        return $leftNumber + $rightNumber;
    }
}
