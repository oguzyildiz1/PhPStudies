<?php
$sehirler = [
    'Ankara' => '45 Kandilli sokağı, Kızılay',
    'İstanbul' => '678 sok Tunalı, Kadıköy',
    'İzmir' => '21. indir sok Urla'
];

$sehir = $_GET['sehir'];
$adres = $sehirler[$sehir];

?>

<?php include 'includes/header.php' ?>

<?php foreach ($sehirler as $key => $value) { ?>
    <a href="get-1.php?sehir=<? $key ?>"><?= $key ?></a>
<?php } ?>

<h1><?= $sehir ?></h1>
<p><?= $adres ?></p>

<?php include 'includes/footer.php' ?>