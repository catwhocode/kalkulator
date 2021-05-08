<?php

$host     = 'localhost';
$username = 'root';
$password = '';
$database = 'test';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_errno) {
    echo 'Koneksi ke databae mengalami kegagalan';
    exit();
}
