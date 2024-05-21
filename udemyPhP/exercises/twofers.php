<?php

declare(strict_types=1);

function twoFer(string $name = "you"): string
{
    return "one for $name, one for me.";
}

$message = twoFer("oy");
echo $message;
