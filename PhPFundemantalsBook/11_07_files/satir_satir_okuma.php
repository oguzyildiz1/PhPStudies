<?php
#dosya sonuna gelinmesini kontrol etmek:
// feof() // fonksiyonu ile olur. File end of file
// dosya sonuna gelirse true, gelinmediyse false döner.

$filename = "test2.txt";

$file = fopen($filename, "r") or die("Dosya açılamadı");
?>


<html>

<head>

</head>

<body>
    <br />
    Dosya Satırları: <br />

    <br />
    <?php
    while (!feof($file)) { // dosya sonuna gelmediyse
        $buffer = fgets($file, 4096);
        echo "<b>$buffer</b><br />";
    }

    fclose($file);
    ?>
</body>

</html>