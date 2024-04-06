<?php

function small_numbers()
{
    return [0, 1, 2, 3];
}

[$zero, $one, $two, $three] = small_numbers();

print_r([$zero, $one, $two, $three]);
