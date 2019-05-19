<?php

namespace Src;


class GraphicalDisplay implements IDisplay
{
    public function display(array $table): void
    {
        printf("%4s", " ");
        printf("%2s", "|");

        foreach ($table as $p => $valArr) {
            printf("%4s", $p);
        }

        echo PHP_EOL;

        printf("%s", "------");
        for ($i = 1, $count = count($table); $i <= $count; $i++) {
            printf("%s", "----");
        }

        echo PHP_EOL;

        foreach ($table as $key => $valArr) {
            printf("%4s", $key);
            printf("%2s", "|");

            foreach ($valArr as $prime => $val) {
                printf("%4s", $val);
            }

            echo PHP_EOL . PHP_EOL;
        }
    }
}