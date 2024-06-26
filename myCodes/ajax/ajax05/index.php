<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <script>
        var data = {
            name: "John Doe",
            age: 30
        };

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "saveFile.php");
        xhr.setRequestHeader("Content-Type", "application/json");
        var sending_data = JSON.stringify(data);
        xhr.send(sending_data);
    </script>

</body>

</html>