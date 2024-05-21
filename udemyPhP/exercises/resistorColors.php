<?php

// 1. Create function for accepting the color as a string.
// 2. Create an array resistor colors with their relative numeric code
// 3. Return a numeric code based on the color's name


// each resistor has a resistance value.
// hard to read
declare(strict_types=1);

function colorCode(string $color): int
{
    $color_arr = [
        "black" => 0, "brown" => 1, "red" => 2, "orange" => 3, "yellow" => 4, "green" => 5, "blue" => 6,
        "violet" => 7, "grey" => 8, "white" => 9
    ];

    return $color_arr[$color];
}

$col_name = "red";

echo colorCode($col_name);
