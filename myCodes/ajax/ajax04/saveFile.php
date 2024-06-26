<?php

// $txt = $_POST["user"];

$name = $_POST["username"];

$myFile = fopen("people.JSON", "w");
fwrite($myFile, $name);
fclose($myFile);
