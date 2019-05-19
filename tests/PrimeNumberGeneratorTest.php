<?php

require_once __DIR__ . '/../vendor/autoload.php';


class PrimeNumberGeneratorTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    public function setUp()
    {
        parent::setUp();
        $this->obj = new \Src\PrimeNumberGenerator();
    }

    public function testGenerateOnePrime()
    {
        $actual = $this->obj->getPrimeNumbers(1);
        $this->assertEquals([2], $actual);
    }

    public function testGenerateTwoPrimes()
    {
        $actual = $this->obj->getPrimeNumbers(2);
        $this->assertEquals([2, 3], $actual);
    }

    public function testGenerateFivePrimes()
    {
        $actual = $this->obj->getPrimeNumbers(5);
        $this->assertEquals([2, 3, 5, 7, 11], $actual);
    }

    public function testGenerateZeroPrime()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->obj->getPrimeNumbers(0);
    }

    public function testNegativeArgument()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->obj->getPrimeNumbers(-1);
    }

}