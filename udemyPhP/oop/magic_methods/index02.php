<?php

require_once 'Account02.php';

$myAccount = new Account('John', 20); // object

echo $myAccount->balance;

var_dump($myAccount);
