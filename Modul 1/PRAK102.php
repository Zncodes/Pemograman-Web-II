<?php

$jari_jari = 4.2;
$tinggi = 5.4;
$panjang = 8.9;
$lebar = 14.7;
$sisi = 7.9;

$luas_alas_segitiga = 0.5 * $panjang * $lebar;

$volume_prisma = $luas_alas_segitiga * $tinggi;

echo number_format($volume_prisma, 3) . " m3";
?>
