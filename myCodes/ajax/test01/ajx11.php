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
    <?php
    $data = array(
        'name' => 'John',
        'age' => 30,
        'city' => 'New York'
    );

    $final_data = json_encode($data);

    echo "<pre>" . $final_data . "</pre>";
    echo "<br />";
    $aaa = 23;
    $aaa_b = (string) $aaa;
    var_dump($aaa_b);
    ?>
    <p>Selam dünyalı</p>

    <script>
        $(document).ready(function() {
            $("p").click(function() {
                $(this).hide();
            });
        });
    </script>

</body>

</html>