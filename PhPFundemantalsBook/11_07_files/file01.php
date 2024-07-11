<?php
$filename = "test.txt";

$file = fopen($filename, "w");

fputs($file, "Oğuzhan, Yıldız, "); //writes the string
fputs($file, "PHP;\r\n");

fclose($file);
