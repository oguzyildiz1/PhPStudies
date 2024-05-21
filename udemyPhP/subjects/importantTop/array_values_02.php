<?php
// array_values is used to reindex the array

$name = "Gökhan";

echo $name;

$names = ["Ayşe", "Fatma", "Hakan", "Gökhan"];

$names[5] = "İrem";

print_r($names);

$names = array_values($names);
echo $names[4];
