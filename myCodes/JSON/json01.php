<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON</title>
</head>

<body>


    <script>
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var people = xhttp.responseText;
                var peopleObj = JSON.parse(people);
                console.log(peopleObj);
            }
        };
        xhttp.open("GET", "people.JSON", true);
        xhttp.send();
    </script>
</body>

</html>