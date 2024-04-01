<?php

$dosyaTip = [".png" => "image/png", ".jpg" => "image/jpg", ".jpeg" => "image/jpeg", ".gif" => "image/gif"];

echo in_array("image/png", $dosyaTip);

/*
    if(file_exists("db")){
        if(file_exists("db/data.csv")){
            echo "Mevcut";
            $i = 0;
        }else{
            touch("db/data.csv");
            echo "dosya oluşturuldu";
        }
    }else{
        $sonuc = mkdir("db", 755); // izinler: localhost, digerleri(kullanici gibi), herkes
        if ($sonuc){
            print("Oluşturuldu");
        }else{
            print("Bir hata oluştu");
        }
    }

    */

/* 
    dosya izinleri: 
    4: okuma
    1: çalıştırma
    2: yazma
    */
