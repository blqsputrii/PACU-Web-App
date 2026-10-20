<?php
$host     = "localhost";
$username = "root";
$password = " ";
$database = "db_pacu";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi Database Gagal: " . $conn->connect_error);
}
?>