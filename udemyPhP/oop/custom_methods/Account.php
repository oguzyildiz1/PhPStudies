<?php

declare(strict_types=1);

class Account
{
    public function __construct(
        public string $name,
        public float $balance
    ) {
    }

    public function deposit(float $amount)
    {
        $this->balance += $amount;
    }
}
