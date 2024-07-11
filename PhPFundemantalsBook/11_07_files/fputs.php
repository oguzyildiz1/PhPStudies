<?php
#fputs puts a string to the file

$filename = "test2.txt";

$file = fopen($filename, "w");

fputs($file, "Oğuzhan, Yıldız, "); //writes the string
fputs($file, "PHP;\r\n\n");
fputs($file, "Helo");

fclose($file);
