<?php
setcookie("cookiename", "selamler");

session_start();
$username = $_SESSION['username'];

$headers = headers_list();


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
        <?php
        foreach ($headers as $header => $value) {
            echo "$header: $value<br />\n";
        }

        ?>
    </div>
</body>

</html>