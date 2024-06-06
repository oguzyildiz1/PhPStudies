<?php

require_once 'Account.php';

$myAccount = new Account('John', 20); // object

$myAccount->deposit(500);

echo $myAccount->balance;

$myAccount->deposit(600);
echo "<br />" . $myAccount->balance;
