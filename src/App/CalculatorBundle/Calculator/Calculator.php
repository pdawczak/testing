<?php

namespace App\CalculatorBundle\Calculator;

class Calculator
{
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
