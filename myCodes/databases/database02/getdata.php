<?php
# use foef to get lines
define("DOSYA", "database.csv");

if (isset($_GET)) {
    $islemTipi = $_GET["islem"];
} else {
    echo "Gelen veri yok";
    exit();
}

// veri kaydetme fonksiyonu
function veriYaz()
{
    $file = fopen(DOSYA, "a+");
    $isFileSuccess = fwrite($file, "Hello man hey\n");
    if ($isFileSuccess) {
        echo "File updated successfully";
    } else {
        echo "Error: File did not updated";
    }
    fclose($file);
}


// veri alma
// ajax kullan
// database'den alalım
//read ile 
function veriCekSatir()
{
    $satirSayisi = 0;
    $file = fopen(DOSYA, "r");
    while (!feof($file)) {
        $line = fgets($file);
        $satirSayisi++;
        echo $line . ": $satirSayisi" . " <br />";
    }
    fclose($file);
}

function veriAlTum()
{
    // HEPSINI ALIR
    $file = fopen(DOSYA, "r");
    echo fread($file, filesize(DOSYA));
    fclose($file);
}

// islem tipine göre $islemTipi

switch ($islemTipi) {
    case "veriCek":
        veriCekSatir();
        break;
    case "veriKayit":
        veriYaz();
        echo "veri yazıldı";
        break;
    default:
        echo "no islem";
}
// veri okuma fonksiyonu