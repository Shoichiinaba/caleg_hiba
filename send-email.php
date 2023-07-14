<?php
require 'phpmailer/PHPMailer.php';
require 'phpmailer/Exception.php';
require 'phpmailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Konfigurasi email
    $to = "hiba@kanpa.co.id";
    $from = "your-email@example.com";
    $body = "Name: $name\nEmail: $email\n\n$message";

    // Inisialisasi PHPMailer
    $mail = new PHPMailer();

    try {
        // Konfigurasi SMTP
        $mail->isSMTP();
        $mail->Host = 'kanpa.co.id';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->Username = 'hiba@kanpa.co.id';
        $mail->Password = 'kanpa2020';

        // Set pengirim dan penerima email
        $mail->setFrom($from);
        $mail->addAddress($to);

        // Set subjek dan isi email
        $mail->Subject = $subject;
        $mail->Body = $body;

        // Kirim email
        if ($mail->send()) {
            echo "Email berhasil dikirim";
        } else {
            echo "Gagal mengirim email";
        }
    } catch (Exception $e) {
        echo "Terjadi kesalahan saat mengirim email: {$mail->ErrorInfo}";
    }
}
?>