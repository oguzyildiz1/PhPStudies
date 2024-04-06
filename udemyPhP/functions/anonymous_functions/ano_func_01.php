<?php

$message = function (bool $check, string $para1) {
    if ($check) {
        return $para1 . ": Yanlış bilgi girişi!";
    } else {
        return $para1 . "Bilgiler doğru";
    }
};

var_dump($message);

echo $message(false, $para1 = "Selam!");
