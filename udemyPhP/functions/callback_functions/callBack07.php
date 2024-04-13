<?php
// dizi işlemleri with callback functions
// getting the first character of string

$width = [10, 2, 5, 12, 6];
$height = [20, 5, 10, 12, 6];

#amac width ve height değerlerine göre browser'da div oluşturmak

?>

<!DOCTYPE html>
<html lang="tr-TR">

<head>
    <meta charset="utf-8">
    <title>Div Oluşturma</title>
    <style>
        * {
            box-sizing: border-box;
        }

        .body {
            margin: 0;
            padding: 0;
        }

        .container {
            width: 500px;
            height: 500px;
            border: 1px solid green;
            position: relative;
            background-color: rgb(200, 245, 203);
        }

        .animated-box {
            width: 20px;
            height: 20px;
            border: 1px solid green;
            background-color: yellow;
        }
    </style>

<body>

    <div class="container">
        <div class="animated-box"><?php print_r($width); ?>

        </div>
    </div>
</body>

</html>