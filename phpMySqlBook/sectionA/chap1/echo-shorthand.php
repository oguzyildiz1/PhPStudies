<?php
$name = "Oğuzhan";
$favorites = ['Baklava', 'Chocolate', 'Tuffee', 'Fudge'];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Echo Shorthand</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <h1>The Candy Store</h1>
    <h2>Welcome <?= $name ?></h2>
    <p>Your favorite kind of candy is :
        <?= $favorites[0] ?>
    </p>
</body>

</html>