<?php
use PHPMailer\PHPMailer\PHPMailer;
// require '/PHPMailer/src/PHPMailer.php';
require './PHPMailer/PHPMailer-PHPMailer-dd01c56/src/PHPMailer.php';
require './PHPMailer/PHPMailer-PHPMailer-dd01c56/src/SMTP.php';
require './PHPMailer/PHPMailer-PHPMailer-dd01c56/src/Exception.php';

// Create a new PHPMailer instance
$mail = new PHPMailer();

// Enable SMTP debugging (optional)
$mail->SMTPDebug = 2;

// Set the SMTP server and authentication details for Gmail
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = false;
$mail->Username = 'mboumdaulrich@gmail.com'; // Replace with your Gmail email address
$mail->Password = 'MBOUMDA1998raymond.'; // Replace with your Gmail password
$mail->SMTPSecure = 'TLS'; // Enable TLS encryption
$mail->Port = 25; // TCP port to connect to

// Set the sender and recipient of the email
$mail->setFrom('mboumdaulrich@gmail.com', 'Ulrich'); // Replace with your name and Gmail email address
$mail->addAddress('fuhetienne0@gmail.com', 'Etienne'); // Replace with the recipient's email address and name

// Set the email subject and body
$mail->Subject = 'Test Email';
$mail->Body = 'This is a test email sent using Gmail SMTP server';

// Send the email
if ($mail->send()) {
    echo 'Email sent successfully';
} else {
    echo 'Error: ' . $mail->ErrorInfo;
}
?>

