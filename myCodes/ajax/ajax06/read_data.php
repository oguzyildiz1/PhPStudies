  <?php
    //reading the json file

    $json = file_get_contents("people.json"); // gets as a string

    $json_data = json_decode($json); //decode the json file

    var_dump($json_data);
    echo "<br>";

    // var_dump($json);

    echo $json_data->username;
    echo $json_data->age;
