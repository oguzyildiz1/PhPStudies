<!DOCTYPE html>
<html lang="tr-TR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Login Page</title>

</head>

<body>
    <form action="kaydet.php" method="POST">
        <div class="container">
            <div class="row">
                <!-- üye olma starts -->
                <div class="col-lg-6">
                    <!-- alert starts -->
                    <?php
                    // get ile gelen veri var mı?
                    // varsa switch case ile kontrol et
                    if (isset($_GET["q"])) {
                        // --- hata kodlarını oluşrutma ----
                        switch ($_GET["q"]) {
                            //eksik veri var mesajı vereceğiz
                            case 1:
                                $mesaj = ["alert-danger","Kullanici verileri eksik!"];
                                break;
                            case 2:
                                $mesaj =["alert-danger", "Şifreler uyuşmuyor!"];
                                break;
                            default:
                                // break;
                                #code
                        }
                        // ----- alert kısmı  ------
                        echo <<<html
                        <div class="alert $mesaj[0] alert-dismissible fade show" role="alert">
                            <strong>Dikkat!</strong> $mesaj[1]
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        html;
                    }
                    ?>
                    <!-- alert ends -->

                    <h2 class="mb-3">Üyelik Oluştur</h2>
                    <div class="mb-2">
                        <input type="text" class="form-control" name="kullaniciAdi" placeholder="Kullanıcı Adı">
                    </div>
                    <div class="mb-2">
                        <input type="text" class="form-control" name="kullaniciSoyadi" placeholder="Kullanıcı Soyadı">
                    </div>
                    <div class="mb-2">
                        <input type="email" class="form-control" name="kullaniciEmail" placeholder="Kullanıcı E-mail">
                    </div>
                    <div class="mb-2">
                        <input type="password" class="form-control" name="kullaniciSifre" placeholder="Kullanıcı Sifre">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="kullaniciSifreTekrar" placeholder="Kullanıcı Sifre Tekrar">
                    </div>
                    <div class="btn-group">
                        <input type="hidden" name="islem" value="uyeKayit" />
                        <button class="btn btn-secondary">Temizle</button>
                        <button class="btn btn-success">İlet</button>
                    </div>
                </div>
                <!-- üye olma ends -->

                <div class="col-lg-6">
                    <h2 class="mb-3">Giriş Yap</h2>
                </div>
            </div>
        </div>
    </form>





    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>