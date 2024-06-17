<?php
$foods = [
    'Çorba' => 'Mercimek, un',
    'Kızartma' => 'Yağ, patates, biber, patlıcan',
    'Pilav' => 'İki bardak su, pirinç pilavı'
];

$food = $_GET['food'];
$ingridients = $foods[$food];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malzeme Listesi</title>
</head>

<body>
    <div style="border: 1px solid gray; display: inline-block;padding: 0.5rem;">
        <?php foreach ($foods as $key => $values) { ?>
            <a href="get04_food_ing.php?food=<?= $key ?>"><?= $key ?></a><br />
        <?php } ?>
    </div>

    <h1><?= $food ?></h1>
    <p><?= $ingridients ?></p>
</body>

</html>