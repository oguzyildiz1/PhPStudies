<?php

declare(strict_types=1);

class Account
{
    public string $name;
    public float $balance;

    public function __construct(string $newName, float $newBalance)
    {
        $this->name = $newName;
        $this->balance = $newBalance;
    }
}
