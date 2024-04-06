<?php

function sum(int | float $a, int | float $b)
{
    return $a + $b;
}

var_dump(sum(5, 9));

function product($a, $b)
{
    return $a * $b;
}

var_dump(product(20, 2200));
