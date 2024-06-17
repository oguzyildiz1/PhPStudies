<?php
#user
#specify as array
$users = [
    'orhan' => 'Bursa, 33333366',
    'serhat' => 'İstanbul, 444 444 44',
    'güliz' => 'Ankara, 555 55 55'
];

$user = 'orhan';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kişi Listeleme</title>
</head>

<body>
    <?php if (isset($user)) { ?>
        <?= "{$user} giriş yaptı" ?>
    <?php } ?>

    <?php foreach ($users as $key => $values) { ?>
        <button onclick="<?= $function_name ?>;"><?= $key ?></button>
    <?php } ?>
    <script>
        /*
        function createMe() {
            alert('Hello Me');
        }*/
    </script>
</body>

</html>