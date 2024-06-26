<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <script>
        $(document).ready(function() {
            $.ajax({
                url: './test01.php',
                dataType: "json",
                success: function(data) {
                    var name = data.name;
                    var age = data.age;
                    var city = data.city;
                    console.log(name, age, city);
                }
            });
        });
    </script>

</body>

</html>