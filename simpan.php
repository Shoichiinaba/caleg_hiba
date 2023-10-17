<?php

require('koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $subject = $_POST["subject"];
    $fname = $_POST["fname"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $currentDate = date("d-m-Y");

    $servername = "localhost";
    // development
    // $username = "root";
    // $password = "";
    // production
    $username = "kina3126_teman-hibba";
    $password = "kanpa2020";

    $dbname = "kina3126_teman-hibba";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Koneksi database gagal: " . $conn->connect_error);
    }

    $sql = "INSERT INTO aspirasi (subject, nama, email, aspirasi, tgl_buat) VALUES ('$subject', '$fname', '$email', '$message', '$currentDate')";

    if ($conn->query($sql) === TRUE) {
        echo " Data Berhasil Terkirim Terimakasih....!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Akses langsung ke file ini tidak diizinkan.";
}
?>