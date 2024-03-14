<?php


// post ile gelen bir veri var mı?

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // islem türüne göre aşağıda işlem yapılacak
    if (isset($_REQUEST["islem"])) { // isset ile değişken atanmış mı ona bakılıyor
        switch ($_REQUEST["islem"]) { // atanmışsa
            case "uyeKayit": // value uye kayit ise buradan devam edecek
                // gelen veriler varsa ve boş değilse
                if (
                    $_POST["kullaniciAdi"] and !empty($_POST["kullaniciAdi"]) and
                    $_POST["kullaniciSoyadi"] and !empty($_POST["kullaniciSoyadi"]) and
                    $_POST["kullaniciEmail"] and !empty($_POST["kullaniciEmail"]) and
                    $_POST["kullaniciSifre"] and !empty($_POST["kullaniciSifre"]) and
                    $_POST["kullaniciSifreTekrar"] and !empty($_POST["kullaniciSifreTekrar"])
                ) {
                    echo "bütün veriler var!";
                } else { // eksik veri varsa yada boş gelmişse
                    //echo "bütün veriler yok!";
                    header("location: index.php?q=1"); // index.php ye q=1 get verisi ile dönüyor
                }
                break;
            default:
                header("location: index.php");
        }
    } else {
        header("location: index.php");
    }
} else {
    header("location: index.php");
}

/*
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
*/
/*
print_r($_REQUEST);
echo "<hr />";
*/

/*
if ($_REQUEST["islem"] == "uyeKayit") {
    echo "Kayit islemi";
} else {
    echo "Kayit islemi değil";
}
*/ 



/*
print_r($_GET);
echo "<br />";

foreach ($_GET as $value) {
    echo "{$value}" . "<br />";
}
*/