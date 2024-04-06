<?php
#variadic functions
#accepts any number of parameters
#stores them to an array
#ex:

$abc = 10;
$str1 = (string) $abc;
$int1 = (int) "104";
var_dump($int1);


function sumTotal(bool $dumArr, ...$nums)
{
    if ($dumArr) {
        var_dump($nums);
    }

    return array_sum($nums);
}

// echo sumTotal(false, 3, 4, 5, 6);

$sayilan = 10;
$i = $sayilan;
$arrNum = 0;
$arr = [];

while ($i > 0 and $i <= $sayilan) {
    $arr[$arrNum] = $sayilan;
    $arrNum++;
    $sayilan--;
    $i--;
}

print_r($arr);
echo "<br />";
sort($arr);
print_r($arr);

$check1 = (int) $arr;
echo $check1;

$hi = (string) 144;
echo $hi . var_dump($hi);
