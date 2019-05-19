<?php

namespace Src;


class PrimeNumberGenerator
{
    public function getPrimeNumbers(int $n): array
    {
        if (empty($n) || $n < 0) {
            throw new \InvalidArgumentException("Invalid Input", 400);
        }

        $primes = [];
        for ($i = 2, $count = 0; $count < $n; $i++) {
            if ($this->isPrime($i)) {
                $primes[] = $i;
                $count++;
            }
        }

        return $primes;
    }

    private function isPrime(int $num): bool
    {
        for ($i = 2, $maxDivisor = floor(sqrt($num)); $i <= $maxDivisor; $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }

        return true;
    }
}