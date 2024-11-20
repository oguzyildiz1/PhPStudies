<?php
$cities = [
    'Ankara' => 'Kızılay meydanı, 12',
    'İstanbul' => 'İstiklal caddesi no: 5',
    'Adana' => 'Ayvalık çarşısı, no: 6'
];

$city = $_GET["city"];
$adress = $cities[$city];

print_r($_GET);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <?php foreach ($cities as $key => $value) { ?>
            <a href="get01.php?city=<?= $key ?>"></a>
        <?php } ?>
    </div>

    <h1><?= $city ?></h1>
    <p><?= $adress ?></p>
</body>

</html>