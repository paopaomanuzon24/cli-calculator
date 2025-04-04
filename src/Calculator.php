<?php

namespace App;

class Calculator
{
    public function calculate($operation)
    {
        $parts = explode(' ', $operation);

        if (count($parts) === 2) {
            /*  $number = floatval($parts[0]);
            if ($parts[1] === 'sqrt') {
                return sqrt($number);
            } else {
                return "Invalid operation";
            }
 */
            return $this->squareRoot($parts[0]);
        }

        if (count($parts) === 3) {
            $firstNumber = floatval($parts[0]);
            $operator = $parts[1];
            $secondNumber = floatval($parts[2]);

            switch ($operator) {
                case '+':
                    #return $firstNumber + $secondNumber;
                    return $this->add($firstNumber, $secondNumber);
                case '-':
                    return $this->subtract($firstNumber, $secondNumber);
                case '*':
                    return $this->multiply($firstNumber, $secondNumber);
                case '/':
                    return $this->divide($firstNumber, $secondNumber);
                default:
                    return "Invalid operation";
            }
        }

        return "Invalid input. Please follow the correct syntax.";
    }


    private function squareRoot($number)
    {
        $number = floatval($number);
        if ($number < 0) {
            return "Invalid Operation";
        }
        return sqrt($number);
    }

    private function add($firstNumber, $secondNumber)
    {
        return $firstNumber + $secondNumber;
    }

    private function subtract($firstNumber, $secondNumber)
    {
        return $firstNumber - $secondNumber;
    }

    private function multiply($firstNumber, $secondNumber)
    {
        return $firstNumber * $secondNumber;
    }

    private function divide($firstNumber, $secondNumber)
    {
        if ($secondNumber == 0) {
            return "Invalid Operation";
        }
        return $firstNumber / $secondNumber;
    }
}
