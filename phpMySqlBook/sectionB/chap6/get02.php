<?php
$foods = [
    'Çorba' => 'Mercimek, un',
    'Kızartma' => 'Yağ, patates, biber, patlıcan',
    'Pilav' => 'İki bardak su, pirinç pilavı'
];

foreach ($foods as $key => $ingredients) {
    echo $key . " için " . $ingredients . " gerekir.<br />";
}
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
        <a href=""><?= $key ?></a><br />
    <?php } ?>

</body>

</html>