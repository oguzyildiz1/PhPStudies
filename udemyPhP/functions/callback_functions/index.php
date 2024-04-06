<?php

#callback functions

$names = ['Alice', 'Bob', 'Carol'];

function greet($name)
{
    echo "Hello, $name!";
}


array_walk($names, 'greet');

usort($names, function ($a, $b) {
    return strcmp($a, $b);
});

print_r($names);
