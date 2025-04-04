<?php

use PHPUnit\Framework\TestCase;

function calculate($operation)
{
    $parts = explode(' ', $operation);

    if (count($parts) === 2) {
        $number = floatval($parts[0]);
        if ($parts[1] === 'sqrt') {
            return sqrt($number);
        } else {
            return "Invalid operation";
        }
    }

    if (count($parts) === 3) {
        $firstNumber = floatval($parts[0]);
        $operator = $parts[1];
        $secondNumber = floatval($parts[2]);

        switch ($operator) {
            case '+':
                return $firstNumber + $secondNumber;
            case '-':
                return $firstNumber - $secondNumber;
            case '*':
                return $firstNumber * $secondNumber;
            case '/':
                if ($secondNumber == 0) {
                    return "Error: Division by zero is not allowed.";
                }
                return $firstNumber / $secondNumber;
            default:
                return "Invalid operation";
        }
    }

    return "Invalid input. Please follow the correct syntax.";
}

class CalculatorTest extends TestCase
{
    public function testAddition()
    {
        $this->assertEquals(7, calculate("5 + 2"));
    }

    public function testSubtraction()
    {
        $this->assertEquals(3, calculate("5 - 2"));
    }

    public function testMultiplication()
    {
        $this->assertEquals(10, calculate("5 * 2"));
    }

    public function testDivision()
    {
        $this->assertEquals(2.5, calculate("5 / 2"));
    }

    public function testDivisionByZero()
    {
        $this->assertEquals("Error: Division by zero is not allowed.", calculate("5 / 0"));
    }

    public function testSquareRoot()
    {
        $this->assertEquals(3, calculate("9 sqrt"));
    }

    public function testInvalidOperation()
    {
        $this->assertEquals("Invalid operation", calculate("5 ^ 2"));
    }

    public function testInvalidInput()
    {
        $this->assertEquals("Invalid input. Please follow the correct syntax.", calculate("5 +"));
    }

    public function testSquareRootNegativeNumber()
    {
        $this->assertEquals("Error: Cannot calculate square root of a negative number.", calculate("-9 sqrt"));
    }
}
