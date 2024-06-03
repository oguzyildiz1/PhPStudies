<?php

require_once 'Account.php';

$myAccount = new Account; // object

$oguzAccount = new Account; //

var_dump($myAccount);

echo $myAccount->balance;

echo intval($myAccount->balance); // intval is int value of a number(type casting)
