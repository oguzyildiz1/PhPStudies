<?php
// function naming rule: "verb" +  _ + "the return name"

$uzunKenar = 10;
$kisaKenar = 5;

function calculate_total(float $num1, float $num2): string
{
    $total = $num1 + $num2;
    return $total;
}

function find_area($kisaKenar, $uzunKenar)
{
    $area = $kisaKenar * $uzunKenar;
    return $area;
}




$sum = calculate_total(11.2, 2.2);
echo $sum;
$rectangle_area = find_area($kisaKenar, $uzunKenar);
