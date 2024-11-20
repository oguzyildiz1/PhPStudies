<?php

$arr = ["keep", "me", "alive"];
$user = "Ariakas2";

function update($arr1)
{
    array_push($arr1, "hey");
    return $arr1;
}

$up = update($arr);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color:#333;color:#b1b1b1">

    <?php if ($user == ""): ?>
        <p>You are welcome</p>
    <?php else: ?>
        <p><?= "$user welcome!" ?></p>
    <?php endif ?>
</body>


</html>