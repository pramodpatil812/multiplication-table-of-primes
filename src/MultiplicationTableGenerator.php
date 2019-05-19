<?php

namespace Src;


class MultiplicationTableGenerator
{
    public function getMultiplicationTable(array $primes): array
    {
        $table = [];
        $noOfPrimes = count($primes);

        for ($i = 0; $i < $noOfPrimes; $i++) {
            for ($j = 0; $j < $noOfPrimes; $j++) {

                //no need to recalculate the multiplication bcoz 2*3 = 3*2 = 6
                if (!isset($table[$primes[$i]][$primes[$j]])) {
                    $table[$primes[$i]][$primes[$j]] = $primes[$i] * $primes[$j];
                    $table[$primes[$j]][$primes[$i]] = $table[$primes[$i]][$primes[$j]];
                }
            }
        }

        return $table;
    }
}