<?php
setcookie("cookiename", "selamler");

session_start();
$username = $_SESSION['username'];

$headers = apache_request_headers();


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



        echo  "<hr />";
        $userAgent = $headers['User-Agent'];
        echo "User Agent: <b>$userAgent</b><br/>";

        echo $username;
        ?>
    </div>
</body>

</html>