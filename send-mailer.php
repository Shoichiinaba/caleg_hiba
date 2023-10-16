<!-- Config file for mail -->

<?php

use PHPMailer\PHPMailer\PHPMailer;

require ('mail/phpmailer/src/Exception.php');
require ('mail/phpmailer/src/PHPMailer.php');
require ('mail/phpmailer/src/SMTP.php');

if(isset($_POST['button']))
{

 // Posted Inputs
$subject = $_POST['subject'];
$message = $_POST['message'];
$fname = $_POST['fname'];
$email = $_POST['email'];


//init data
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Username = "hibba@teman-hibba.com"; // Replace with your mail id
$mail->Password = "07f8s0uMGq5;"; //Replace with your mail pass
$mail->SMTPAuth = true;  // authentication enabled
$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
$mail->SMTPAutoTLS = false;
$mail->Host = 'mail.teman-hibba.com';
$mail->Port = 995;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;


//Recipients
$mail->setFrom('no-replay@email.com', 'Example Form');
$mail->addAddress('receive@gmail.com', 'Saiarlen');  //add to email
$mail->addReplyTo('receive@gmail.com', 'saiarlen');  //add replay to email



// Content
$mail->isHTML(true);  // Set email format to HTML
$mail->Subject = $subject;
$mail->Body    = 'My name is' . $fname .'<b>' . $message . '</b>';

//Info Message
if (!$mail->send()) {
$error = "Mailer Error: " . $mail->ErrorInfo;
echo '<p id="res">'.$error.'</p>';
}
else {
echo '<p id="res">Thanks! Message Sent Successfully.</p>';
}
}
else{
echo '<p id="res">Please enter valid Inputs</p>';
}

?>