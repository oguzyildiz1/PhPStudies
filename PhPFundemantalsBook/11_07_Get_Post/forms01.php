<html>

<head>
    <title>Forms</title>
</head>

<body>
    <h1> Form </h1>

    <form action="" method="POST"><!-- aCTİON Gidilecek sayfayı belirtir -->
        <input type="text" name="left" /><br />
        <input type="text" name="right" /><br />
        <input type="submit" value="topla" />
    </form>
    <div>
        <p> Toplam: <?= $_POST["left"] + $_POST["right"] ?> </p>
    </div>

</body>


</html>