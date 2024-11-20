<?php

function main()
{
    $text1 = new Textual();
    $text1->displayVar();
    $text1->getArray();
}

class Textual
{
    public $var = "Hello to space jam";

    public function displayVar()
    {
        echo $this->var;
    }

    public function getArray()
    {
        $arr = explode(" ", $this->var);
        $arr2 = [];

        echo "<br/>";;
        $i = count($arr) - 1;

        while ($i >= 0) {
            echo $arr[$i] . " ";
            array_push($arr2, $arr[$i]);
            $i--;
        }

        var_dump($arr2);
    }
}

main();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background:black;color:white;font-size:1.5rem;">

</body>

</html>