<?php

require 'vendor/autoload.php';

use App\Calculator;

$calculator = new Calculator();

// CLI Input
echo "Enter a calculation: ";
$handle = fopen("php://stdin", "r");
$input = trim(fgets($handle));

$result = $calculator->calculate($input);
echo "Result: " . $result . "\n";

fclose($handle);
