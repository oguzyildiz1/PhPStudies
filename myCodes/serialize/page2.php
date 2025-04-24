<?php
include "A.php";

$s = file_get_contents('store');
$a = unserialize($s);


$a->show_one();
