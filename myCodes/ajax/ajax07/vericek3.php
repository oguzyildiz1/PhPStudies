<?php
print_r($_GET);
$adi = $_GET["isim"];
$mesaj = $_GET["mesaj"];

$sonuc = $adi . "'nın mesajı: " . $mesaj;

// $file = fopen()

echo $sonuc;
