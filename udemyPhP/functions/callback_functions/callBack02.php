<?php

function callbackFunction($arg1, $arg2)
{
    echo "Callback function called with arguments : $arg1, $arg2";
}

// callbackFunction("hi", "hello");

function performOperation($callback, $arg1, $arg2)
{
    echo "Performing operation...";
    $callback($arg1, $arg2);
}

performOperation('callbackFunction', 'Hello', 'World');
