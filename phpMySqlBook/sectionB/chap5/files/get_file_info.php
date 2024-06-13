<?php

$string = __FILE__;
echo __FILE__ . "<br />";

$string_lower = strtolower($string);
$string_upper = strtoupper($string);

echo $string_upper . "<br />";
echo strlen($string);
echo $string_lower;

echo "<hr >";
$text = "ne zamandır gitmek ve gezmek isterdim.";

echo "<u>Cümle</u>: " . ucwords($text);
echo "Kelime sayısı: " . str_word_count($text);
