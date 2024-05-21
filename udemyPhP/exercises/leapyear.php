<?php

// report that is a leap year
// on every year that i sevenly divisible by 4
// check if the year is divisible by 4
// except the year is evenly divisible by 100 and evenly divisi

// 4'e tam bölünecek
// ama 100 ve 400ü'e de tam bölünürsede oluyor
declare(strict_types=1);

function isLeap(int $year): bool
{
    // eğer yıl 4'e tam bölünüyorsa ve 
    // 100 ve 400'e tam bölünüyorsa leap year oluyor
    if ((($year % 100) == 0) && (($year % 400) == 0)) {
        return true;
    } else if (($year % 100) == 0) { // sadece 100'e bölünüyorsa
        return false; // sadece 100'e bölünüyorsa
    } else if (($year % 4) == 0) {
        return true;
    } else {
        return false;
    }
}

echo isLeap(1988);
