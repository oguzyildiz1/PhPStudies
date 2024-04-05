<?php

#variadic functions
#accepts any number of parameters
#stores them to an array
#ex:

function sum(bool $dumArr, ...$nums)
{
    if ($dumArr) {
        var_dump($nums);
    }

    return array_sum($nums);
}

echo sum(false, 3, 4, 5, 6);
