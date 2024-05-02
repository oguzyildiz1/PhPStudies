<?php
$name = "Ivy";
$price = 2;

$nutrition = [
    'fat' => 17,
    'sugar' => 32,
    'salt' => 3.3,
    'protein' => 4,
];

$nutrition['sugar'] = 22;
$nutrition['vitamine'] = 12;


?>

<!DOCTYPE html>
<html>

<head>
    <title>Variables</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
i

<body>
    <h1>The Candy Store</h1>
    <h2>Nutrition per 100g</h2>
    <p><?php echo "Fat: {$nutrition['fat']}%"; ?></p>
    <p><?php echo "Sugar: {$nutrition['sugar']}%"; ?></p>
    <p><?php echo "Salt: {$nutrition['salt']}%"; ?></p>
    <p><?php echo "Protein: {$nutrition['protein']}%"; ?></p>
    <p><?php echo "Vitamine: {$nutrition['vitamine']}%"; ?></p>
</body>

</html>