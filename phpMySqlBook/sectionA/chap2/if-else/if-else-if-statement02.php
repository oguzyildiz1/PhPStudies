<?php

$num1 = 5;
$num2 = 10;

$islem = "çarpım";

if ($islem == "çarpım") {
    $result = $num1 * $num2;
} elseif ($islem == "toplama") {
    $result = $num1 + $num2;
} elseif ($islem == "bölme") {
    $result = $num1 / $num2;
} else {
    $result = $num1 - $num2;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candy Store</title>
</head>

<body>

    <h1>Candy Store</h1>
    <h2>Chocolate</h2>
    <p><?= "Sonuc: " . $result; ?></p>
</body>

</html>