<?php
declare(strict_types=1);

namespace PrinsFrank\ArithmeticOperationsFloatingPoint\Tests\Unit;

use PHPUnit\Framework\TestCase;
use PrinsFrank\ArithmeticOperationsFloatingPoint\ArithmeticOperationsFloatingPoint;

/**
 * @coversDefaultClass \PrinsFrank\ArithmeticOperationsFloatingPoint\ArithmeticOperationsFloatingPoint
 */
class ArithmeticOperationsFloatingPointTest extends TestCase
{
    /**
     * @covers ::add
     */
    public function testAdd(): void
    {
        static::assertSame(42.0, (new ArithmeticOperationsFloatingPoint())->add(21, 21));

        static::assertEqualsWithDelta(42.633, (new ArithmeticOperationsFloatingPoint())->add(21.333, 21.3), 0.001);
    }

    /**
     * @covers ::subtract
     */
    public function testSubtract(): void
    {
        static::assertSame(42.0, (new ArithmeticOperationsFloatingPoint())->subtract(84, 42));

        static::assertEqualsWithDelta(0.033, (new ArithmeticOperationsFloatingPoint())->subtract(21.333, 21.3), 0.001);
    }

    /**
     * @covers ::divide
     */
    public function testDivide(): void
    {
        static::assertSame(42.0, (new ArithmeticOperationsFloatingPoint())->divide(84, 2));

        static::assertEqualsWithDelta(42.333, (new ArithmeticOperationsFloatingPoint())->divide(127, 3), 0.001);
    }

    /**
     * @covers ::multiply
     */
    public function testMultiply(): void
    {
        static::assertSame(42.0, (new ArithmeticOperationsFloatingPoint())->multiply(21, 2));

        static::assertEqualsWithDelta(42.3333, (new ArithmeticOperationsFloatingPoint())->multiply(14.1111, 3), 0.00);
    }

    /**
     * @covers ::modulus
     */
    public function testModulus(): void
    {
        static::assertSame(42.0, (new ArithmeticOperationsFloatingPoint())->modulus(85, 43));

        static::assertSame(42.0, (new ArithmeticOperationsFloatingPoint())->modulus(85.33, 43));
    }

    /**
     * @covers ::power
     */
    public function testPower(): void
    {
        static::assertSame(2.0, (new ArithmeticOperationsFloatingPoint())->power(2, 1));
        static::assertSame(4.0, (new ArithmeticOperationsFloatingPoint())->power(2, 2));

        static::assertEqualsWithDelta(5.29, (new ArithmeticOperationsFloatingPoint())->power(2.3, 2), 0.001);
    }
}
