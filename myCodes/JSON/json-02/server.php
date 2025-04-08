<?php

require "../../partials/functions.php";

$myObj = new stdClass();

$myObj->name = "John";
$myObj->age = 30;
$myObj->city = "New York";

$myObj2 = new stdClass();

$myObj2->name = "Cole";
$myObj2->age = 20;
$myObj2->city = "London";

if ($_GET["QUE"] === 1) {
    $myJson = json_encode($myObj);
} elseif ($_GET["QUE"] === 2) {
    $myJson = json_encode($myObj2);
}

echo $myJson;
