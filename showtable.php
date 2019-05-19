<?php

require_once __DIR__ . '/vendor/autoload.php';


if (!isset($argv[1]) || (int)$argv[1] <= 0) {
    echo "Invalid input. Number of primes required and should be greater than 0" . PHP_EOL;
    die;
}

$primes = (new Src\PrimeNumberGenerator())->getPrimeNumbers((int)$argv[1]);

$table = (new Src\MultiplicationTableGenerator())->getMultiplicationTable($primes);

//(new Src\SimpleDisplay())->display($table);
(new Src\GraphicalDisplay())->display($table);
