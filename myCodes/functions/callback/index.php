<?php

function setEachNumber($test, $fn)
{

    $evenNumbers = array();

    // use for each
    foreach ($test as $number) {
        // add the numbers if they are even    
        if ($fn($number)) {
            $evenNumbers[] = $number;
        }
    }

    return $evenNumbers;
}

function checkEven($value)
{
    // if value is 2, 2%2 = 0 true
    return ($value % 2) == 0; // 
}

function checkOdd($value)
{
    // if value is 2, 2%2 = 0 true
    return ($value % 2) == 1; // 
}

$test = [1, 2, 3, 4, 5];

$evenNumbers = setEachNumber($test, 'checkEven');

echo "<pre>";
print_r($evenNumbers);
echo "</pre>";
