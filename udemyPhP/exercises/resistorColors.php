<?php

// 1. Create function for accepting the color as a string.
// 2. Create an array resistor colors with their relative numeric code
// 3. Return a numeric code based on the color's name


// each resistor has a resistance value.
// hard to read
function colorCode($color)
{
    $array = [
        "black" => 0, "brown" => 1, "red" => 2, "orange" => 3, "yellow" => 4, "green" => 5, "blue" => 6,
        "violet" => 7, "grey" => 8, "white" => 9
    ];

    if (in_array($color, $array)) {
        return $array[$color];
    } else {
        return "no such color";
    }

    return "1";
}

function takeInput($para1)
{
    $color = readline("Enter the color? ");
    $mesaj = colorCode($color);
    return $mesaj;
}

$mesaj = "";
takeInput($mesaj);
echo $mesaj;
