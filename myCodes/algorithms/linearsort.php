<?php

// linear sort function
function sortArray($arr)
{
    // $updatedArr = [];
    // ---------- linear sort ---------
    $arr1 = $arr;
    $arrLength = count($arr1); // array length

    for ($i = 0; $i < $arrLength - 1; $i++) { // look until last index
        if ($arr1[$i] > $arr1[$i + 1]) { // if there is a bigger number, switch them
            $updatedValue = $arr1[$i]; // 1 
            $arr1[$i] = $arr1[$i + 1]; // 0, 5 oldu
            $arr1[$i + 1] = $updatedValue; // 1, 1 olacak

            return $arr1;
        }
    }

    return false;
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
$numbers = array();

// $numbers = [1, 5, 3, 2, 6];
// $numbers = [13, 52, 31, 25, 61, 11, 23];
$numbers = [13, 52, 131, 25, 61, 11, 123, 103];

$arrLength = count($numbers);
$iterations = 0;
$result = $numbers;
$sorted = array();

while ($result = sortArray($result)) {
    $sorted = $result;
}


require 'linearsort.view.php';
