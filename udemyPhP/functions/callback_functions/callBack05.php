<?php
// dizi işlemleri with callback functions

// define an array
declare(strict_types=1);

$arr1 = ["Ayşe", "Fatma", "Hasan", "Hüseyin"];

$test_array = function (array $arg1): array {
    $arr2 = [];
    foreach ($arg1 as $isim) {
        $changed_name = $isim . " Yılmaz";
        array_push($arr2, $changed_name);
    }

    return $arr2;
};

function addSurname($callback, $arg1)
{
    echo "Adding surnames ... ";
    return $callback($arg1);
}

$surnames = addSurname($test_array, $arr1);

print_r($surnames);







exit();
// anonymous function example:
$callback = function ($arg1, $arg2) {
    echo "Function called with arguments : $arg1, $arg2";
};

// using ano functions
// $callback("Hello", "World");

function perform($callback, $arg1, $arg2)
{
    echo "Performing operations" . "\n";
    $callback($arg1, $arg2);
}

perform($callback, 'Selam', 'Dünya');
