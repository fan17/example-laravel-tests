<?php
namespace Math\Calculator;

class CalculatorService
{
    public function add(int $firstNumber, int $secondNumber) : int
    {
        return $firstNumber + $secondNumber;
    }
}