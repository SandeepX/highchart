<?php

namespace App\Calculator;

class Calculator
{
    /**
     * @param $num1
     * @param $num2
     *
     * @return int
     */
    public function add($num1, $num2) : int
    {
        return $num1 + $num2;
    }

    /**
     * @param $num1
     * @param $num2
     *
     * @return int
     */
    public function subtract($num1, $num2) : int
    {
        return $num1 - $num2;
    }

    /**
     * @param $num1
     * @param $num2
     *
     * @return int
     */
    public function multiply($num1, $num2) : int
    {
        return $num1 * $num2;
    }

    /**
     * @param $num1
     * @param $num2
     *
     * @return float
     */
    public function divide($num1, $num2) : float
    {
        return $num1 / $num2;
    }
}
