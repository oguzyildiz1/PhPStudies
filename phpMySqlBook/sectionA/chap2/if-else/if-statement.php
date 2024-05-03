<?php
$name = 'Selami';
$greeting = 'Hello';

if ($name !== '') {
    $greeting = 'Welcome back, ' . $name;
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
    <h2><?= $greeting ?></h2>
</body>

</html>