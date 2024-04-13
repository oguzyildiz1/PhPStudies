<?php
// dizi işlemleri with callback functions
// getting the first character of string

declare(strict_types=1);

$adlar = ["Kemal", "Zeynep", "Ali", "Mustafa", "Kaan"];
sort($adlar);

print_r($adlar);

foreach ($adlar as $key => $value) {
    echo "{$key} => {$value} <br />";
    if ($value[0] == "A") {
        unset($adlar[$key]);
        $adlar[$key] = "null";
    }
}

sort($adlar);

print_r($adlar);

exit();

#ilk harfi bul
#eğer A ise 3. adım
#3. İlk harfi b'ye değiştir

// gelen arrayin ilk harflerini [0] şeklinde basmak
$mainArr = function ($arg1) {
    return $arg1[0];
};

function ilkHarfGoster(array $arr1)
{
    foreach ($arr1 as $data) {
        $first = substr($data, 0, 1);
        echo "$first \n";
        // ilk harflerini B'ye çevirdik, yeniden listeye kayıt edilecek;
        if ($data[0] == 'a' || $data[0] == 'A') {
            $data[0] = 'B';
            echo "$data \n";
        }
    }
}

ilkHarfGoster($adlar);

echo $mainArr("Tkins");

// print_r($adlar);
