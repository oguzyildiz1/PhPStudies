<?php

// define('name', 'oğuzhan');
$sayac = 1;

if (!defined('name')) {
    define('name', 'oğuzhan');
    echo name . " definded.";
} else {
    echo 'name is defined already.';
}

echo "<br />";
if (isset($sayac)) {
    echo "the variable is set";
};
