<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
        //verileri yollamak için post kullanmak gerekiyor!!!
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "./recieve.php", true);

        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onload = () => {
            if (xhr.status === 200) {
                // The file was successfully updated or deleted
                alert("The file was successfully updated or deleted.");
            } else {
                // There was an error updating or deleting the file
                alert("There was an error updating or deleting the file.");
            }
        };

        var testJJJ = {
            adi: "Oğuzhan",
            soyadi: "Yıldız"
        }

        var xxx = JSON.stringify(testJJJ);

        xhr.send(xxx);
    </script>

</body>

</html>