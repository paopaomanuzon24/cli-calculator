<?php


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

// CLI
echo "Enter a calculation: ";
$handle = fopen("php://stdin", "r");
$input = trim(fgets($handle));

$result = calculate($input);
echo "Result: " . $result . "\n";

fclose($handle);
