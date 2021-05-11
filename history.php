<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>.</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <h1><a href="history.php">Kalkulator :: History</a></h1>

<?php

include 'db.php';

$sql = "SELECT * FROM history";
$result = mysqli_query($conn, $sql);
?>
<table>
<?php
while($data = mysqli_fetch_array($result)){
    echo '<tr><td>' . $data['bil1'] . $data['simbol'] . $data['bil2'] . '<br>=' . $data['hasil'] . '</td><td>' . $data['simbol'] . '</td></tr>';

}
?>
</table>
<form method="post" action="hapus.php">
<div><input type="submit" value="Hapus Riwayat"></div>
</form>
