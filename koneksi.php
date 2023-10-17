<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kina3126_teman-hibba";

// Membuat koneksi database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}
?>