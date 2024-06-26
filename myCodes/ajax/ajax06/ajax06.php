<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <script>
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'save_data.php', true);
        // i will send JSON string to recieve.php
        xhr.setRequestHeader('Content-Type', 'application/json');

        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.write("yazıldı");
            }
        }

        const user = {
            username: 'lion_01',
            age: 32
        };


        xhr.send(JSON.stringify(user));
    </script>

</body>

</html>