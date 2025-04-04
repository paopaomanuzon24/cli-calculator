<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    protected $calculator;

    // Set up the calculator instance
    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testAddition()
    {
        $this->assertEquals(7, $this->calculator->calculate("5 + 2"));
    }

    public function testSubtraction()
    {
        $this->assertEquals(3, $this->calculator->calculate("5 - 2"));
    }

    public function testMultiplication()
    {
        $this->assertEquals(10, $this->calculator->calculate("5 * 2"));
    }

    public function testDivision()
    {
        $this->assertEquals(2.5, $this->calculator->calculate("5 / 2"));
    }

    public function testDivisionByZero()
    {
        $this->assertEquals("Invalid Operation", $this->calculator->calculate("5 / 0"));
    }

    public function testSquareRoot()
    {
        $this->assertEquals(3, $this->calculator->calculate("9 sqrt"));
    }

    public function testInvalidOperation()
    {
        $this->assertEquals("Invalid operation", $this->calculator->calculate("5 ^ 2"));
    }

    public function testInvalidInput()
    {
        $this->assertEquals("Invalid input. Please follow the correct syntax.", $this->calculator->calculate("5 +"));
    }

    public function testSquareRootNegativeNumber()
    {
        $this->assertEquals("Invalid Operation", $this->calculator->calculate("-9 sqrt"));
    }
}
