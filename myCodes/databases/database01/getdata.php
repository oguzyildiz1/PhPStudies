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
    // checking file 
    if ($isFileSuccess) {
        echo "File updated successfully";
    } else {
        echo "Error: File did not updated";
    }
    fclose($file);
}

function veriAl()
{
    echo "hi";
}

// islem tipine göre $islemTipi

switch ($islemTipi) {
    case "veriCek":
        veriAl();
        break;
    case "veriKayit":
        veriYaz();
        echo "veri yazıldı";
        break;
    default:
        echo "no islem";
}
// veri okuma fonksiyonu