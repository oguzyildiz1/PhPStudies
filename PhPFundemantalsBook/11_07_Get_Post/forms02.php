<html>

<head>
    <title>Forms</title>
</head>

<body>
    <h1> Form </h1>

    <?php
    $left = "";
    $right = "";

    if (isset($_POST["add"])) {
        $left = $_POST["left"];
        $right = $_POST["right"];
        $sum = $left + $right;
        echo "Toplam: <b>$sum</b>";
    }

    ?>
    <form action="" method="POST"><!-- aCTİON Gidilecek sayfayı belirtir -->
        Sol sayı :
        <input type="text" name="left" value="<?= $left ?>" /><br />
        Sağ Sayı :
        <input type="text" name="right" value="<?= $right ?>" /><br />
        <input type="submit" value="topla" name="add" />
    </form>

</body>


</html>