<?php
// reading writing 

//writes to the end of file
function writeFile($para1)
{
    $text = $para1 . "\n";
    $myfile = fopen("test.csv", "a");
    $sonuc = fwrite($myfile, $text);
    fclose($myfile);

    echo $sonuc;
}

function readMyFile()
{
    $myfile = fopen("test.csv", "r");
    $test = fread($myfile, 15);
    fclose($myfile);

    echo $test;
}

function readOneLine()
{
    $myfile = fopen("test.csv", "r");
    $tekHarf = "";
    $cumle = "";
    $sayac = 0;

    // 

    while ($tekHarf != "\n") {
        $tekHarf = fread($myfile,  1);
        $cumle .= $tekHarf;
        $sayac++;
    }

    fclose($myfile);

    return $cumle;
    // whle loop ile tek tek harfleri oku
    // \n gelince bitir
    // okunan harfleri birleştir (bir varda)
    // eğer \n geilrse for'u sonlandır! 
}

// read lines one by one, adds ";" to the end of line and returns whole text as a string
function readManyLines()
{
    $myfile = fopen("test.csv", "r");
    $tekHarf = "";
    $cumle = "";


    // alttaki satırı
    // !feof($myfile)
    while (!feof($myfile)) {
        $tekHarf = fread($myfile, 1);

        if ($tekHarf == "\n") { // bu varsa
            var_dump($cumle);
            $cumle .= ";";

            continue;
            // echo "girildi" . $cumle . "hey";
            // array_push($cumleler, $cumle);
        }

        $cumle .= $tekHarf;
    }
    echo "<br />";
    echo $cumle; // ikinci cumle var
    return $cumle;
}

// parses text into a string
function parseReadLines($text)
{
    $string1 = $text;
    $lines = explode(";", $string1);

    return $lines;
}

// echo readLines();
// writeFile("yarın, saat 3");
$string_text = readManyLines();
var_dump($string_text);

$lines = parseReadLines($string_text);
print_r($lines);
