<?php

include "A.php";

$a = new A;
// echo $a->show_one();;
$s = serialize($a);

file_put_contents('store', $s);
