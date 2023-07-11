<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Konfigurasi email
    $to = "hiba@kanpa.co.id"; // Alamat email penerima
    $from = "your-email@example.com"; // Alamat email pengirim
    $headers = "From: $from";
    $body = "Name: $name\nEmail: $email\n\n$message";

    // Kirim email
    if (mail($to, $subject, $body, $headers)) {
        echo "Email berhasil dikirim";
    } else {
        echo "Terjadi kesalahan saat mengirim email";
    }
}
?>