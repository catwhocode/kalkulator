<style>
    table td {
        padding: 5px;
        border: solid 1px #ccc;
    }
</style>
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
