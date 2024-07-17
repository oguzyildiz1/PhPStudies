<?php

$isim = 'OGUZHAN';
define('ISIM_' . $isim, $isim);

echo ISIM_OGUZHAN;

define('ISIM_2', 'orhan');
echo "İSİM 2: " . ISIM_2;

echo defined('ISIM_2');
