<?php
$txt = $_POST["xxx"];

$myFile = fopen("test.json", "w");
fwrite($myFile, $txt);
fclose($myFile);
