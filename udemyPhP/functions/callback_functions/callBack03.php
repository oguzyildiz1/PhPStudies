<?php

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
