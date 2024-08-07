<?php

class Account
{
    public int $number;
    public string $type;
    public float $balance;
}

$account = new Account();
$account->number = 123456;
$account->type = "yatırım";
$account->balance = 23450;

echo $account->number;
echo $account->type;
echo $account->balance;
