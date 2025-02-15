<?php

require "../../partials/functions.php";

$myObj = new stdClass();

$myObj->name = "John";
$myObj->age = 30;
$myObj->city = "New York";

$myJson = json_encode($myObj);


echo $myJson;
