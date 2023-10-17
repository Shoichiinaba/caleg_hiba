<?php
$servername = "localhost";
// development
// $username = "root";
// $password = "";
// production
$username = "kina3126_teman-hibba";
$password = "kanpa2020";
$dbname = "kina3126_teman-hibba";

// Membuat koneksi database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}
?>