<?php
function test_factorials($test, $array)
{
    if ($test === $array) {
        return "Test successed";
    } else {
        return "Test failed";
    }
}

function find_factorials($number)
{
    // number = 20
    $i = 2;
    $factorials = [];
    $counter = $number; // 20

    while (True) {
        if ($i > $counter / 2) { // 10 dan büyükse
            echo "Asal sayı";
            break;
        }

        // bölümden kalan sıfır ise bölen artmayacak
        if ($number % $i == 0) { // 2 
            $number = $number / $i; // $number = 10
            $factorials[] = $i; // ekledik
        } else {
            $i++; // 3 
        }
    }

    return $factorials;
}

$factorials = find_factorials(171);

$test_array = [3, 7];
$test_result = test_factorials($test_array, $factorials);
echo $test_result;

print_r($factorials);
