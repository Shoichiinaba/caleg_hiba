<?php

require('koneksi.php');

if (isset($_POST['button'])) {

    $subject = $conn->real_escape_string($_POST['subject']);
    $fname = $conn->real_escape_string($_POST['fname']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);


    $sql = "INSERT INTO aspirasi (nama, email, subject, aspirasi) VALUES ('$fname', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {

        echo "Data berhasil Terkirim. ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

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
    $username = "root";
    $password = "";

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