# multiplication-table-of-primes

### Introduction
This repository contains code which can generate multiplication table of first N prime numbers. The solution follows **TDD** approach. All the tests are inside the **tests** directory and the main classes are in **src** directory. 

```src/PrimeNumberGenerator.php``` contains two functions - a ```public function getPrimeNumbers(int $n)``` to return first N primes and a ```private function isPrime($num)``` which checks whether given number is prime or not.

```src/MultiplicationTableGenerator.php``` contains a ```public function getMultiplicationTable(array $primes)``` which takes array of first N primes as input and returns a multiplication table for them.

### How to run
Code uses [composer](https://getcomposer.org) for dependency management. Use follwing steps to run the programme:

1. Run ```composer install``` in root directory of the project which will download all the required dependencies specified in composer.json.

2. Run code with ```php showtable.php 10```. This will print the multiplication table of first 10 prime numbers.
3. Here is the samle output
