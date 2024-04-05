<?php

function sum(int | float $a, int | float $b)
{
    return $a + $b;
}

var_dump(sum(5, 9));
