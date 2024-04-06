<?php
#variadic functions
#accepts any number of parameters
#stores them to an array
#ex:

function sumTotal(bool $dumArr, ...$nums)
{
    if ($dumArr) {
        var_dump($nums);
    }

    return array_sum($nums);
}

echo sumTotal(false, 3, 4, 5, 6);

include 'sums.php';

echo "<hr />";

echo divide(10, 2);
