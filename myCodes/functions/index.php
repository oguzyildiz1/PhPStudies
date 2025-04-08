<?php
// writing code 
// functions callback

@include_once "functions.php";

// array
$animals = [
    [
        "tür" => "Kopek",
        "cins" => "rotriever",
        "yaş" => 5
    ],
    [
        "tür" => "Kedi",
        "cins" => "tekir",
        "yaş" => 3
    ],
    [
        "tür" => "Kuş",
        "cins" => "Martı",
        "yaş" => 6
    ],
    [
        "tür" => "Kopek",
        "cins" => "rotriever",
        "yaş" => 2
    ],
    [
        "tür" => "Kuş",
        "cins" => "Papagan",
        "yaş" => 5
    ]
];

// write a filter function
// need two functions

// main function
$filtered = function ($animals, $fn) {
    // new array
    $filteredAnimals = [];
    // iterate every data in arr
    foreach ($animals as $animal) {
        //echo $animal["yaş"] . " ";
        // if yaş < 5
        if ($fn($animal)) { // true ise
            // add the value in new arr if yas < 5
            $filteredAnimals[] = $animal;
        }

    }

    return $filteredAnimals;

};

// extractin the var
$filteredAnimals = $filtered ($animals, function ($value)) {

    return $value < 5;

};

