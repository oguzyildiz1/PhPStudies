<?php
$array1 = ["image/jpeg", "image/png"];
$array2 = ["altı", "yedi", "sekiz"];
print_r($_FILES);

$str1 = ($_FILES["kullaniciDosya"]["type"]);
echo $str1 . "<hr />";

echo in_array($_FILES["kullaniciDosya"]["type"], $array1);
echo in_array("altı", $array2);
