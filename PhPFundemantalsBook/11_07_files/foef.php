<?php

$file = fopen("test2.txt", "r") or die("Böyle bir dosya yok");
// fgets should be inserted in while loop
while (!feof($file)) {
    $satir = fgets($file, 4096);
    echo "$satir <br />";
};
fclose($file);
