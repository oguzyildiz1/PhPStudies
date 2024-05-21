<?php
// array_values is used to reindex the array

$name = "Gökhan";

echo $name;

$names = ["Ayşe", "Fatma", "Hakan", "Gökhan"];

print_r($names);

unset($names[2]);
echo "<br />";
print_r($names);

// to reindex an array
$names = array_values($names);
echo "<br />";
print_r($names);
