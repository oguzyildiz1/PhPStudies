<?php
$item = 'Chocolate';
$stock = 8;
$wanted = 5;

$can_buy = ($wanted <= $stock);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Echo Shorthand</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <h1>The Candy Store</h1>
    <h2>Shopping Cart</h2>
    <p>Item: <?= $item ?></p>
    <p>Stock <?= $stock ?></p>
    <p>Wanted <?= $wanted ?></p>
    <p>Can buy: <?= $can_buy ?></p>

</body>

</html>