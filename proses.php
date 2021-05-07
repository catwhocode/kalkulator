<?php 
$bil1 = $_POST['bil1'];
$bil2 = $_POST['bil2'];

$operasi = $_POST['operasi'];

if ($operasi == 'tambah') {
    $hasil = $bil1 + $bil2;
} elseif ($operasi == 'kurang') {
    $hasil = $bil1 - $bil2;
}

echo $hasil;