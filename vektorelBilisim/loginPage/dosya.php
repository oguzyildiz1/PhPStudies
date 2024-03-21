<?php
/* 
    for ($i = 1; $i <= 10; $i++) {
        echo $i;
    }
*/
    if(file_exists("db")){
        if(file_exists("db/data.csv")){
            echo "Mevcut";
            $i = 0;
        }else{
            touch("db/data.csv");
            echo "dosya oluşturuldu";
        }
    }else{
        $sonuc = mkdir("db", 755);
        if ($sonuc){
            print("Oluşturuldu");
        }else{
            print("Bir hata oluştu");
        }
    }

    /* 
    dosya izinleri: 
    4: okuma
    1: çalıştırma
    2: yazma
    */

?>