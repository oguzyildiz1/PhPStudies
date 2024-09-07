<?php
$greetings = ['Hi', 'Howdy', 'Hello', 'Hola', 'Welcome', 'Ciao'];
$random = array_rand($greetings);
$greeting = $greetings[$random];

$bestsellers = ['notebook', 'pencil', 'ink'];
$bestsellers_count = count($bestsellers);

$bestsellers_text = implode(", ", $bestsellers);

//array holding cust details
$customer = [
    'forename' => 'Oguzhan',
    'surname' => 'Yıldız',
    'email' => 'yildizoguz1@gmail.com',
];

if (array_key_exists('forename', $customer)) {
    $greeting .= " " . $customer['forename'];
}
?>

<h1>Best Sellers</h1>

<p><?= $greeting ?></p>