<?php
define("_FILEDIR", "../db/data.csv"); // defines a global constant

$islem_kayit_mi = 0;
$gelen_veri_var_mi = 0;
$sifre_uyusuyor_mu = 0;

$dosyaTip = [".png" => "image/png", ".jpg" => "image/jpg", ".jpeg" => "image/jpeg", ".gif" => "image/gif"]; // alg 8.1

print_r($_FILES);
echo "<hr />";

// print_r($_SERVER[""]);
// echo $_SERVER["REQUEST_METHOD"];

// print_r($_POST);



// --- resim ekleme algoritması --- (notlar.md)

// ----  dosya yükleme islemleri start -----------------------------------
/*
if ($_FILES["kullaniciDosya"]["error"] == 0) { // error yok ise
    // boyut sorgulaması (5. adım)
    if (($_FILES["kullaniciDosya"]["size"] / 1024) <= 600) { // 600 kb'den az ise
        // alg 8.2
        if (in_array($_FILES["kullaniciDosya"]["type"], $dosyaTip)) { // dosya tipi resim mi? 
            print($_FILES["kullaniciDosya"]["type"]);
        } else {
            header("location: index.php?q=5"); // alg 8.2.1 değilse hata kodu
        }
    } else {
        header("location: index.php?q=4"); // error code 4 size
    }
} else {
    header("location: index.php?q=3"); // error code 3
}
*/

// ------------ dosya yükleme işlemleri ends ----------------



// ------------ kullanıcı veri işlemleri starts --------------------

// post ile gelen bir veri var mı?








// 4. fonk boşluklardan arınıdırıp, tagleri temizle

// 5. fonk verileri dosyaya kayıt et

//fonksiyon 1: veri gelmişmi? (isset)
function islemTipiKontrolEt()
{
    # $arg1 == "uyeKayit" olması gerekiyor
    if (isset($_REQUEST["islem"])) {
        $islem_tipi = $_REQUEST["islem"];
        switch ($islem_tipi) {
            case "uyeKayit":
                return true; // islem tipini geri döndürüyoruz
                break;
            default:
                header("location: ../index.php");
        }
    } else {
        header("location: ../index.php");
    }
}

//fonksiyon 2:  gelen veri boş mu değil mi?
function gelenVeriVarMi()
{
    if (
        $_POST["kullaniciAdi"] and !empty($_POST["kullaniciAdi"]) and
        $_POST["kullaniciSoyadi"] and !empty($_POST["kullaniciSoyadi"]) and
        $_POST["kullaniciEmail"] and !empty($_POST["kullaniciEmail"]) and
        $_POST["kullaniciSifre"] and !empty($_POST["kullaniciSifre"]) and
        $_POST["kullaniciSifreTekrar"] and !empty($_POST["kullaniciSifreTekrar"])
    ) {
        return true;
    } else {
        header("location: ../index.php?q=1");
    }
}

// fonksiyon 3 sifre kontrol gelen şifre ve tekrar şifre eş mi?
function sifreKontrolEt()
{
    if ($_POST["kullaniciSifre"] == $_POST["kullaniciSifreTekrar"]) {
        return true;
    } else {
        header("location: ../index.php?q=2");
    }
}

// boşluklardan arındırılıp, tagler temizlenecek
function verileriTemizleme()
{
    $veri_list_temiz = array();
    foreach ($_REQUEST as $veri) {
        // üyeKayıt dışındaki tüm verileri listeye kaydediyor.
        if ($veri == "uyeKayit") {
            continue;
        }
        $veri_temiz = strip_tags($veri);
        $veri_temiz = trim($veri_temiz);
        array_push($veri_list_temiz, $veri_temiz);
    }

    return $veri_list_temiz;
}

function veriEkranaBas()
{
    foreach ($_REQUEST as $xxx) {
        echo "$xxx <br />";
    }
}
/* ----------- ana kontroller starts ------------ */

#post ile gelen veri varsa bütün fonksiyonlar buradan çağıralacak
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // check the process type(islem)
    $islem_kayit_mi = islemTipiKontrolEt();
    $gelen_veri_var_mi = gelenVeriVarMi();
    $sifre_uyusuyor_mu = sifreKontrolEt();

    if ($islem_kayit_mi and $gelen_veri_var_mi and $sifre_uyusuyor_mu) {
        echo "islemler oldu <br />";
        veriEkranaBas();
        $veri_list = verileriTemizleme();
        /************ *************** ********************* */
        /********* kaldım *************** */
    }
} else {
    header("location: ../index.php");
}

/* ----------- ana kontroller end ------------ */

exit();



// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // islem türüne göre aşağıda işlem yapılacak
//     if (isset($_REQUEST["islem"])) { // isset ile değişken atanmış mı ona bakılıyor
//         switch ($_REQUEST["islem"]) { // atanmışsa
//             case "uyeKayit": // value uye kayit ise buradan devam edecek
//                 //  --- 1. gelen veriler varsa ve boş değilse ---
//                 if (
//                     $_POST["kullaniciAdi"] and !empty($_POST["kullaniciAdi"]) and
//                     $_POST["kullaniciSoyadi"] and !empty($_POST["kullaniciSoyadi"]) and
//                     $_POST["kullaniciEmail"] and !empty($_POST["kullaniciEmail"]) and
//                     $_POST["kullaniciSifre"] and !empty($_POST["kullaniciSifre"]) and
//                     $_POST["kullaniciSifreTekrar"] and !empty($_POST["kullaniciSifreTekrar"])
//                 ) {
//                     //  ---- 2. sifre kontrol  ----- 
//                     if ($_POST["kullaniciSifre"] == $_POST["kullaniciSifreTekrar"]) {

//                         // ----- dosyaya yazma işlemi  ----
//                         // boşluklardan arınıdırıp, tagleri temizleyip kaydettik
//                         $ad = trim(strip_tags($_POST["kullaniciAdi"]));
//                         $soyad = trim(strip_tags($_POST["kullaniciSoyadi"]));
//                         $email = trim(strip_tags($_POST["kullaniciEmail"]));
//                         $sifre = md5($_POST["kullaniciSifre"]);

//                         // --- dosyaya kaydetme ----
//                         $yaz = $ad . ";" . $soyad . ";" . $email . ";" . $sifre . "\n"; // yazılacak texti $yaz değişkenine birleştirip koyduk
//                         $dosyaAc = fopen(_FILEDIR, "a+"); // yazılacak dosyayı a+ ile açtık
//                         $sonuc = fwrite($dosyaAc, $yaz); // dosyanın içine $yaz textini yazdık.
//                         fclose($dosyaAc); // acılan dosyayı fclose ile kapattık

//                     } else {
//                         header("location: index.php?q=2");
//                     }
//                 } else { // eksik veri varsa yada boş gelmişse
//                     //echo "bütün veriler yok!";
//                     header("location: index.php?q=1"); // index.php ye q=1 get verisi ile dönüyor
//                 }
//                 break;
//             default:
//                 header("location: index.php");
//         }
//     } else {
//         header("location: index.php");
//     }
// } else {
//     header("location: index.php");
// }
// --------------- kullanıcı veri işlemleri ends ----------------------

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