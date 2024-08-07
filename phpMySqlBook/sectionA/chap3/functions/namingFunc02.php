<?php
// function naming rule: "verb" +  _ + "the return name"
// speed = d / t

$distance = 500; // m
$time = 20; // second

function find_speed($distance, $time): int
{
    $speed = $distance / $time;
    return $speed;
}

$car_speed = find_speed($distance, $time);
echo $car_speed . " m/s";
