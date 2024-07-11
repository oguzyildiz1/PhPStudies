<?php
#dosya okuma işlemi
#fgets: satır satır okur

$filename = "test2.txt";

$file = fopen($filename, "r");
$buffer = fgets($file, 4096); // satır yoksa 4096 bitlik veri okur, varsa satırı okur.
# okumanın 2.  parametresi 1024, 2048, 4096 gibi 2'nin katlarıdır.
fclose($file);
echo $buffer;
echo "<br />";
var_dump($buffer);
