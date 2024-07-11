<?php
session_start();

$username = $_SESSION["username"];

?>

<html>

<head>
    <title>Forms</title>
</head>

<body>
    <h1> Form </h1>

    oturumdan alındı: <?= $username ?>.

</body>


</html>