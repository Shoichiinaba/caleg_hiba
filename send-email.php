<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Konfigurasi email
    $to = "hiba@kanpa.co.id";
    $from = "your-email@example.com";
    $headers = "From: $from";
    $body = "Name: $name\nEmail: $email\n\n$message";

    // Mengatur konfigurasi SMTP
    ini_set('SMTP', 'kanpa.co.id');
    ini_set('smtp_port', 465);
    ini_set('sendmail_from', $from);

    // Kirim email
    if (mail($to, $subject, $body, $headers)) {
        echo "Email berhasil dikirim";
    } else {
        echo "Terjadi kesalahan saat mengirim email";
    }
}
?>