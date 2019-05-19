<?php

require_once __DIR__ . '/../vendor/autoload.php';


class MultiplicationTableGeneratorTest extends \PHPUnit\Framework\TestCase
{
    private $obj;
    private $primeGenerator;

    public function setUp()
    {
        parent::setUp();
        $this->obj = new \Src\MultiplicationTableGenerator();
        $this->primeGenerator = new \Src\PrimeNumberGenerator();
    }

    public function testGenerateForOnePrime()
    {
        $actual = $this->obj->getMultiplicationTable($this->primeGenerator->getPrimeNumbers(1));
        $this->assertEquals([2 => [2 => 4]], $actual);
    }

    public function testGenerateForTwoPrimes()
    {
        $actual = $this->obj->getMultiplicationTable($this->primeGenerator->getPrimeNumbers(2));
        $this->assertEquals([
            2 => [2 => 4, 3 => 6],
            3 => [2 => 6, 3 => 9]
        ], $actual);
    }

    public function testGenerateForFourPrimes()
    {
        $actual = $this->obj->getMultiplicationTable($this->primeGenerator->getPrimeNumbers(4));
        $this->assertEquals([
            2 => [2 => 4, 3 => 6, 5 => 10, 7 => 14],
            3 => [2 => 6, 3 => 9, 5 => 15, 7 => 21],
            5 => [2 => 10, 3 => 15, 5 => 25, 7 => 35],
            7 => [2 => 14, 3 => 21, 5 => 35, 7 => 49]
        ], $actual);
    }


}