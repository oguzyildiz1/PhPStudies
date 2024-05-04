<?php

$stock = 0;
$ordered = 0;

if ($stock > 0) {
    $message = "in stock";
} elseif ($ordered > 0) {
    $message = "coming soon";
} else {
    $message = "Sold out";
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
    <p><?= $message ?></p>
</body>

</html>