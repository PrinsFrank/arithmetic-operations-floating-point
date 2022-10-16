<?php
declare(strict_types=1);

namespace PrinsFrank\ArithmeticOperationsFloatingPoint;

use PrinsFrank\ArithmeticOperations\ArithmeticOperations;

class ArithmeticOperationsFloatingPoint implements ArithmeticOperations
{
    public function add(float $left, float $right): float
    {
        return $left + $right;
    }

    public function subtract(float $left, float $right): float
    {
        return $left - $right;
    }

    public function divide(float $dividend, float $divisor): float
    {
        return $dividend / $divisor;
    }

    public function multiply(float $left, float $right): float
    {
        return $left * $right;
    }

    public function modulus(float $dividend, float $divisor): float
    {
        return $dividend % $divisor;
    }

    public function power(float $base, float $exponent): float
    {
        return $base ^ $exponent;
    }
}
