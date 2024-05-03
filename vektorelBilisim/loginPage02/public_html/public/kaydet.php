<?php
define("_FILEDIR", "../../db/data.csv"); // defines a global constant

$islem_kayit_mi = 0;
$gelen_veri_var_mi = 0;
$sifre_uyusuyor_mu = 0;

$dosyaTip = [".png" => "image/png", ".jpg" => "image/jpg", ".jpeg" => "image/jpeg", ".gif" => "image/gif"]; // alg 8.1

echo "<hr />";


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



// ------------ kullanıcı veri işlemleri starts ---
// post ile gelen bir veri var mı?

// 4. fonk boşluklardan arınıdırıp, tagleri temizle

// 5. fonk verileri dosyaya kaydet

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
        echo "<br /> temiz list:";
        print_r($veri_list);
        /************ *************** ********************* */
        /********* kaldım *************** */
    }
} else {
    header("location: ../index.php");
}

/* ----------- ana kontroller end ------------ */

/* ----- dosya yazma işlemi start ---- */

function dosyaYazma($liste)
{
    $ad = $liste[0];
    $soyad = $liste[1];
    $email = $liste[2];
    $sifre = md5($liste[3]);
    $yaz = $ad . ";" . $soyad . ";" . $email . ";" . $sifre . "\n";
    echo "<br />" . $yaz;
    $dosyaAc = fopen(_FILEDIR, "a+");
    $sonuc = fwrite($dosyaAc, $yaz);
    fclose($dosyaAc);
    echo "<br /> veri dosyaya kaydedildi.";
}

#temizlenmiş verileri dosyaya yazma
# $veri_list yazılacak liste 
dosyaYazma($veri_list);

/* ----- dosya yazma işlemi ends ---- */

/*---- resim kaydetme starts ----- */
echo "<hr />";
echo "<h3>Dosya İşlemleri</h3>";

if ($_FILES['kullaniciDosya']['error'] === 4) {
    header("location: ../index.php?q=6"); // dosya seçilmedi
}

echo "dosya boyutu: " . $_FILES['kullaniciDosya']['size'] . " bytes || " . round($_FILES['kullaniciDosya']['size'] / 1024) . " kilobytes";


// if($_FILES['kullaniciDosya']['size'])
