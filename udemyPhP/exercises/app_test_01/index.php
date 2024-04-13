<?php
// dizi işlemleri with callback functions
// getting the first character of string

$width = [10, 2, 5, 12, 6];
$height = [20, 5, 10, 12, 6];

#amac width ve height değerlerine göre browser'da div oluşturmak

?>

<!DOCTYPE html>
<html lang="tr-TR">

<head>
    <meta charset="utf-8">
    <title>Div Oluşturma</title>
    <link rel="stylesheet" href="./myCss.css">
</head>

<body>

    <div class="container">
        <div class="container-new">new</div>
        <div class="animated-box"><?php echo $width[0]; ?>

        </div>
    </div>
    <script>
        // yeni ufak div'ler oluşturuldu
        const cont_new = document.querySelector(".container-new");
        const new_div = document.createElement("div");
        new_div.classList.add("small-div");
        cont_new.append(new_div); // .container-new div'ine eklendi

        let renk = <?php echo "'blue'"; ?>;
        console.log(renk);
        new_div.style.backgroundColor = "blue";

        // container-new içerisine for döngüsü ile div oluşturacağız...
    </script>
</body>

</html>