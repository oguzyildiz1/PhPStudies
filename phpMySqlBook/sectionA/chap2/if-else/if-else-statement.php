<?php
$stock = 6;

if ($stock > 5) {
    $message = 'in stock';
} else {
    $message = 'sold out';
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