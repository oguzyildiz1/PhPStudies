<?php

declare(strict_types=1);

$age = '';
$message = '';

function is_number($number, int $min = 0, int $max = 100): bool
{
    return ($number >= $min and $number <= $max);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $age = $_POST['age'];
    $valid = is_number($age, 16, 65);
    if ($valid) {
        $message = 'Age is vadid';
    } else {
        $message = 'You must be 16-65';
    }
}
?>


<html>

<head>

</head>

<?= $message ?>

<body>
    <form action="validating_num.php" method="POST">
        Age: <input type="text" name="age" size="4"
            value="<?= htmlspecialchars($age) ?>" />
        <input type="submit" value="SAVE" />
    </form>
</body>

</html>