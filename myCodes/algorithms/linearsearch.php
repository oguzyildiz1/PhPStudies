<?php


function sortArray($arr)
{
    // $updatedArr = [];
    // ---------- linear sort ---------
    $arr1 = $arr;
    $arrLength = count($arr1);

    for ($i = 0; $i < $arrLength - 1; $i++) {
        if ($arr1[$i] > $arr1[$i + 1]) {
            $updatedValue = $arr1[$i]; // 1 
            $arr1[$i] = $arr1[$i + 1]; // 0, 5 oldu
            $arr1[$i + 1] = $updatedValue; // 1, 1 olacak

            return $arr1;
        }
    }

    return $arr1;
}

// recurive test
function sortArrayRec($arr)
{
    // $updatedArr = [];
    // ---------- linear sort ---------
    $arr1 = $arr;
    $arrLength = count($arr1);

    for ($i = 0; $i < $arrLength; $i++) {

        if ($i == $arrLength - 1) { // son indexe ulaşmışsa bitir
            return $arr1;
        }

        // eger buyukse
        if ($arr1[$i] > $arr1[$i + 1]) {
            $updatedValue = $arr1[$i]; // 1 
            $arr1[$i] = $arr1[$i + 1]; // 0, 5 oldu
            $arr1[$i + 1] = $updatedValue; // 1, 1 olacak
            // yeniden çağır
            sortArrayRec($arr1);
        }
    }
}
/*  ----- algorithm
    // check for 2 consequtive number 
 
    // repeat
    $arr[0] > $arr[1]; // 1 ,5
    // if n > n+1 in index, switch places
    $updatedValue = $arr[0]; // 1 
    $arr[0] = $arr[1]; // 0, 5 oldu
    $arr[1] = $updatedValue; // 1, 1 olacak

    // return the result
*/
// burada kaldım
function test($value)
{
    if ($value == 10) {
        return $value;
    } else {
        return false;
    }
}

while ($num = test($num)) {
}
exit();
// ---------- buradan devam edilecek ----------

$numbers = array();

// $numbers = [1, 5, 3, 2, 6];
$numbers = [13, 52, 31, 25, 61, 11, 23];
$arrLength = count($numbers);
$iterations = 0;
$result = $numbers;

// kaç tane data varsa o kadar çağır
while ($iterations != $arrLength) { // 5 == 5 ise dur
    $result = sortArray($result);
    $iterations++; // 1 
}


echo "<pre>";

print_r($result);
exit();

var_dump($result);
echo "<hr>";
var_dump($numbers);
echo "</pre>";
