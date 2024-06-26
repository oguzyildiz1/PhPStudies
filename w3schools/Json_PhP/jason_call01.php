<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Getting data from a PHP Server</h1>
    <p id="demo"></p>

    <script>
        const xmlhttp = new XMLHttpRequest();

        xmlhttp.onload = function() {
            const myObj = JSON.parse(this.responseText);
            document.getElementById("demo").innerHTML = myObj.name;
        }

        xmlhttp.open("GET", "demo01.php");
        xmlhttp.send();
    </script>
</body>

</html>