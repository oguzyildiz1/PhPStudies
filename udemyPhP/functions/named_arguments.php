<?php

#named arguments

function division($a = 10, $b = 2)
{
    $div = $a / $b;
    return $div;
}

$result = division();
echo $result;
