<?php
$server = 'sql212.epizy.com';
$user = 'epiz_32005398';
$password = '6Ki0Ceeat1D';
$database = 'epiz_32005398_kuafor_randevu_sistemi';

$baglanti = mysqli_connect($server, $user, $password, $database);

if (!$baglanti) {
    echo "MySQL sunucu ile baglanti kurulamadi! </br>";
    echo "HATA: " . mysqli_connect_error();
    exit;
}

?>