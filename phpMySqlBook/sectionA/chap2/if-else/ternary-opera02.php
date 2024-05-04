<?php

$name = "hakan";

$message = ($name == "hakan") ? "Hello hakan" : "welcome guest";

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
    <p><?= $message ?></p>
</body>

</html>