<?php

declare(strict_types=1);

$username = '';
$message = '';

function is_text($text, int $min = 0, int $max = 100): bool
{
    $length = mb_strlen($text);
    return ($length >= $min and $length <= $max);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $valid = is_text($username, 3, 18);
    if ($valid) {
        $message = 'Username is valid';
    } else {
        $message = 'Username must be 3-18 characters';
    }
}

?>

<!DOCTYPE html>
<html lang="tr-TR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?= $message ?>
    <form action="validate-text-length.php" method="POST">
        <span>Username:</span> <input type="text" name="username" size="9"
            value="<?= htmlspecialchars($username) ?>" />
        <input type="submit" value="SAVE" />
    </form>
    <?= mb_strlen($username) ?>
</body>

</html>