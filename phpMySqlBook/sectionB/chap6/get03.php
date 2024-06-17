<?php
$foods = [
    'Çorba' => 'Mercimek, un',
    'Kızartma' => 'Yağ, patates, biber, patlıcan',
    'Pilav' => 'İki bardak su, pirinç pilavı'
];

foreach ($foods as $key => $ingredients) {
    echo $key . " için " . $ingredients . " gerekir.<br />";
}

$food = $_GET['food'];
echo $food;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malzeme Listesi</title>
</head>

<body>
    <?php foreach ($foods as $key => $ingredients) { ?>
        <a href="get03.php?food=<?= $key ?>"><?= $key ?></a><br />
    <?php } ?>

</body>

</html>