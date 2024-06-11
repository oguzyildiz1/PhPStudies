<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="demo">
        <h2>Change the text</h2>

        <input type="button" onclick="testMe()" value="click me" />
    </div>

    <script>
        function testMe() {
            const xhttp = new XMLHttpRequest(); // new instance

            xhttp.onload = function() {
                document.getElementById("demo").innerHTML = this.responseText;
            }

            xhttp.open("GET", "simple.txt", true);
            xhttp.send();
        }
    </script>
</body>

</html>