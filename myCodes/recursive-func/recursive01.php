<?php
$sayac = 7;

function toplama($para1, $base)
{
    if ($para1 == $base) {
        return $para1;
    }


    echo "test: " . "{$para1}" . "<br />";
    return toplama($para1 + 1, $base) + $para1;
}


$test = toplama(1, $sayac);
echo $test;
