<?php
$liste = [["Oğuzhan", "Yıldız", "1983"], ["Orhan", "Yıldız", "1986"], ["Güliz", "Yıldız", "1984"]];
?>

<html lang="tr-TR">

<head>
    <meta charset="utf-8">
    <title>Menu Bars</title>
    <link rel="stylesheet" href="./test.css">
</head>

<body>


    <div class="main-container">
        <table id="kisiler">
            <tr>
                <th>isim</th>
                <th>Soy İsim</th>
                <th>Doğum Yılı</th>
            </tr>
            <?php
            // each liste items is written
            foreach ($liste as $kisi) {
                echo "<tr>";
                foreach ($kisi as $info) {
                    echo "<td>$info</td>";
                }
                echo "</tr>";
            }

            ?>
        </table>
    </div>
    <hr />
    <div id="info"></div>

    <script src="./test.js"></script>
</body>


</html>