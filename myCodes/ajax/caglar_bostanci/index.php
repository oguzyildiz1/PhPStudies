<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Untitled Document</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>

<body>
    <form id="veriGonder" onSubmit="return false">
        <input type="text" name="adi" placeholder="Adınız">
        <input type="text" name="soyadi" placeholder="Soyadi">
        <button name="gonder" id="formVeri">VERİ GÖNDER</button>
    </form>
    <div id="veriSonucu"></div>

    <button id="veriCek1" name="veriCek">VERİ ÇEK 1</button><br>
    <button id="veriCek2" name="veriCek">GET İLE VERİ GÖNDER</button><br>
    <button id="ajaxSetup">AJAX SETUP</button><br>
    <form onSubmit="return false" id="serial">
        <input type="text" name="kullaniciAdi" placeholder="Kullanıcı Adı">
        <input type="password" name="sifre" placeholder="Şifre">
        <input type="submit" name="gonder" id="gonder" value="Giriş yap">
    </form>
    <script type="text/javascript">
        $("#veriCek1").click(function() {
            $.ajax({
                url: 'vericek1.php',
                success: function(sonuc) {
                    $("#veriSonucu").html(sonuc);
                }
            });
        });
        //*******************************************************/


        $("#veriCek2").click(function() {
            $.ajax({
                type: "GET",
                url: "vericek2.php",
                data: {
                    adi: "çağlar",
                    soyadi: "Bostancı",
                    gun: "2018-02-11"
                },
                success: function(sonuc) {
                    $("#veriSonucu").html(sonuc);
                }

            });
        });
        /***************************************************************************/
        $("#formVeri").click(function() {
            var veriler = "kulName=" + $('[name="adi"]').val() + "&kulSurName=" + $('[name="soyadi"]').val();
            var ajax = $.ajax({
                type: "GET",
                url: "vericek3 .php",
                data: veriler,
                success: function(sonucMesaj) {
                    $("#veriSonucu").html(sonucMesaj);
                }
            }); //ajax bitti
            ajax.done(function(sonucMesaj) {
                $("#veriSonucu").html(sonucMesaj);
            });
            ajax.fail(function(jqXHR, textStatus) {
                $("#veriSonucu").html("Üzgünüm bir hata oluştu :" + textStatus);

            });
            /*
			bir diğer kullanımı
			$.ajax({
		type:"GET",
		url:"vericek3 .php",
		data:veriler,
		success: function(sonucMesaj){
			 $("#veriSonucu").html(sonucMesaj);
			}
		}).done(function(sonucMesaj){
			$("#veriSonucu").html(sonucMesaj);
			}).fail(function(jqXHR,textStatus){
			$("#veriSonucu").html("Üzgünüm bir hata oluştu :"+textStatus);
			
			});
			
			
			
			
			
			*/
        });
        /*****************************$.ajaxSetup Kullanımı**************************/
        $("#ajaxSetup").click(function() {

            //BİRDEN ÇOK AJAX İŞLEMİNDE TEKRAR EDEN BİLGİLERİ BİR ÇATI ALTINDA TOPLAR
            $.ajaxSetup({
                url: "vericek4.php",
                type: "GET"
            });
            $.ajax({
                data: {
                    adi: "çağlar",
                    soyadi: "Bostancı",
                    gun: "2018-02-11"
                },
                success: function(sonuc1) {
                    $("#veriSonucu").html(sonuc1);
                }
            });
            $.ajax({
                data: {
                    dogum: "1988",
                    dogumyeri: "Kırşehir",
                    yas: "32"
                },
                success: function(sonuc2) {
                    $("#veriSonucu").append(sonuc2);
                }
            });



        });
        /****************form serialize kullanımı**********************/

        $("#gonder").click(function() {
            $.ajax({
                type: "POST",
                url: "vericek5.php",
                data: $("#serial").serialize(),
                dataType: "html",
                beforeSend: function() { // istek işlemi gerçekleşmeden önce
                    $("#gonder").attr("disabled", true);
                    $("#veriSonucu").html("<img src='caglarbostanci-com-tr-sayfa-yukleniyor.gif'>")
                },
                success: function(sonuc) {
                    $("#veriSonucu").html(sonuc);
                },
                complete: function() { //istem gerçekleştikten sonra yapılması gerekenler.
                    $("#gonder").attr("disabled", false);
                },
                statusCode: {
                    //html hatalarında yapılacakları belirlememizi sağlar.
                    400: function() {
                        $("#veriSonucu").html("İstek hatalı");
                    },
                    401: function() {
                        $("#veriSonucu").html("İstek için kimlik doğrulaması gerekiyor.");
                    },
                    404: function() {
                        $("#veriSonucu").html("Buralar çok ıssız.");
                    }

                },
                error: function(jqXHR, textStatus) {
                    $("#veriSonucu").html(textStatus);
                }

            });
        });
    </script>
</body>

</html>