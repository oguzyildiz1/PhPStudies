<?php

$aaa = "Selamlar Dunyali!";

echo $aaa;
echo mb_strlen($aaa);
$ll = mb_strlen($aaa);
echo "<br>";

for ($i = 0; $i < $ll + 1; $i++) {
    # code...
    echo $aaa[$i] . "<br>";
    if ($aaa[$i] == NULL) {
        echo "111";
    }
}
