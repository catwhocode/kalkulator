<?php

include 'db.php';

$sql = "DELETE FROM history";

if (!mysqli_query($conn, $sql)) {
    echo 'Penghapusan history mengalami kegagalan';
    $conn->close();
    exit;
}

$conn->close();

echo 'History berhasil dihapus';
