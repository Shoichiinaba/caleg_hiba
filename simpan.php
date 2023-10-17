<?php

require('koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $subject = $_POST["subject"];
    $fname = $_POST["fname"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $servername = "localhost";
    // development
    $username = "root";
    $password = "";
    // production
    // $username = "root";
    // $password = "";

    $dbname = "kina3126_teman-hibba";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Koneksi database gagal: " . $conn->connect_error);
    }

    $sql = "INSERT INTO aspirasi (subject, nama, email, aspirasi) VALUES ('$subject', '$fname', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo " Dan Data Sudah Kami Terima....!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Akses langsung ke file ini tidak diizinkan.";
}
?>