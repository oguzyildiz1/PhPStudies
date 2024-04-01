<?php
define("_FILEDIR", "db/data.csv"); // defines a global constant
$dosyaTip = [".png" => "image/png", ".jpg" => "image/jpg", ".jpeg" => "image/jpeg", ".gif" => "image/gif"];

print_r($_FILES);
echo "<hr />";

// --- resim ekleme algoritması --- (notlar.md)

// Error sorgulama
if ($_FILES["kullaniciDosya"]["error"] == 0) { // error yok ise
    // boyut sorgulaması (5. adım)
    if (($_FILES["kullaniciDosya"]["size"] / 1024) <= 600) { // 600 kb'den az ise
        // if (in_array($_FILES['kullaniciDosya']['type'], $dosyaTip)) { // dosya tipi resim mi?
        //     print($_FILES["kullaniciDosya"]["size"] / 1024);
        // } else {
        //     header("location : index.php?q=5");
        // }
    } else {
        header("location: index.php?q=4"); // error code 4 size
    }
} else {
    header("location: index.php?q=3"); // error code 3
}

exit();

// post ile gelen bir veri var mı?

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // islem türüne göre aşağıda işlem yapılacak
    if (isset($_REQUEST["islem"])) { // isset ile değişken atanmış mı ona bakılıyor
        switch ($_REQUEST["islem"]) { // atanmışsa
            case "uyeKayit": // value uye kayit ise buradan devam edecek
                //  --- 1. gelen veriler varsa ve boş değilse ---
                if (
                    $_POST["kullaniciAdi"] and !empty($_POST["kullaniciAdi"]) and
                    $_POST["kullaniciSoyadi"] and !empty($_POST["kullaniciSoyadi"]) and
                    $_POST["kullaniciEmail"] and !empty($_POST["kullaniciEmail"]) and
                    $_POST["kullaniciSifre"] and !empty($_POST["kullaniciSifre"]) and
                    $_POST["kullaniciSifreTekrar"] and !empty($_POST["kullaniciSifreTekrar"])
                ) {
                    //  ---- 2. sifre kontrol  ----- 
                    if ($_POST["kullaniciSifre"] == $_POST["kullaniciSifreTekrar"]) {

                        // ----- dosyaya yazma işlemi  ----
                        // boşluklardan arınıdırıp, tagleri temizleyip kaydettik
                        $ad = trim(strip_tags($_POST["kullaniciAdi"]));
                        $soyad = trim(strip_tags($_POST["kullaniciSoyadi"]));
                        $email = trim(strip_tags($_POST["kullaniciEmail"]));
                        $sifre = md5($_POST["kullaniciSifre"]);

                        // --- dosyaya kaydetme ----
                        $yaz = $ad . ";" . $soyad . ";" . $email . ";" . $sifre . "\n"; // yazılacak texti $yaz değişkenine birleştirip koyduk
                        $dosyaAc = fopen(_FILEDIR, "a+"); // yazılacak dosyayı a+ ile açtık
                        $sonuc = fwrite($dosyaAc, $yaz); // dosyanın içine $yaz textini yazdık.
                        fclose($dosyaAc); // acılan dosyayı fclose ile kapattık

                    } else {
                        header("location: index.php?q=2");
                    }
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