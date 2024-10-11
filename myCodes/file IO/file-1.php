<?php
define('__ROOT__', dirname(__FILE__));

require_once(__ROOT__ . '/file-functions.php');

$yazilacak_metin = "orhan, 1986, selamlar nasıl gidiyor?";

// writeFile($yazilacak_metin);

$readLines = readManyLines();
$messages = explode(";", $readLines);
print_r($messages);

exit();



$myfile = fopen("test.csv", "r");


fclose($myfile);
