<?php

namespace Src;


class SimpleDisplay implements IDisplay
{
    public function display(array $table) : void {
        print_r($table);
    }
}