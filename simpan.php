<?php

include 'db.php';

$bil1 = $_POST['bil1'];
$bil2 = $_POST['bil2'];

$operasi = $_POST['operasi'];
$hasil   = $_POST['hasil'];

$query = "INSERT INTO history(bil1, bil2, operasi, hasil) VALUES($bil1, $bil2, '$operasi', $hasil)";

if (!mysqli_query($conn, $query)) {
    echo 'Penyimpanan data mengalami kegagalan';
    $conn->close();
    exit;
}

$conn->close();

echo 'Data berhasil disimpan';
