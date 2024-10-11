<?php

$text = "Selamlar dünya nasılsın?";

// function text_split($text, $base)
// {
//     if ($char == " ")
//     {
//         return " ";
//     }

// $text_len = 
// while ($text[$i] != '\n')
// {

// }
$start = 0;
$end = 1;

for ($k = 0, $j = mb_strlen($text); $k < $j; $k++) {
    // echo $text[$k] . "<br />";
    echo mb_substr($text, $start, 1) . "<br />";
    $start++;
    $end++;
}
