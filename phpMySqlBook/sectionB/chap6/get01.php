<?php
$foods = [
    'Çorba' => 'Mercimek, un',
    'Kızartma' => 'Yağ, patates, biber, patlıcan',
    'Pilav' => 'İki bardak su, pirinç pilavı'
];

foreach ($foods as $key => $ingredients) {
    echo $key . " için " . $ingredients . " gerekir.<br />";
}
