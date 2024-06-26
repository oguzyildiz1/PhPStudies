<?php
if (isset($_GET)) {
    $res_text = "get ile gelen veri var";
} else {
    $res_text = "gelen veri yok";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./post_self.php" method="get">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <br>
        <input type="submit" value="Submit">
    </form>
    <hr />
    <div class="display">
        <?php echo $res_text;
        print_r($_GET);
        ?>
    </div>
</body>

</html>