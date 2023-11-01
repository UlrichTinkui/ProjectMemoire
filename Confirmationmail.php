<?php
use PHPMailer\PHPMailer\PHPMailer;
// require '/PHPMailer/src/PHPMailer.php';
require './PHPMailer/PHPMailer-PHPMailer-dd01c56/src/PHPMailer.php';
require './PHPMailer/PHPMailer-PHPMailer-dd01c56/src/SMTP.php';
require './PHPMailer/PHPMailer-PHPMailer-dd01c56/src/Exception.php';

$mail = new PHPMailer();
$mail->isSMTP();
$mail->CharSet = 'UTF-8';
// $mail->Host = 'smtp.gmail.com';
// $mail->SMTPAuth = false;
// $mail->Username = 'mboumdaulrich@gmail.com';
// $mail->Password = 'MBOUMDA1998raymond.';
// $mail->SMTPSecure = 'tls';
// $mail->Port = 25;
// $mail->SMTPAutoTLS = false;

 
$mail->Host       = "smtp.gmail.com";    // SMTP server example
$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Port       = 587;                    // set the SMTP port for the GMAIL server
$mail->Username   = "mboumdaulrich@gmail.com";            // SMTP account username example
$mail->Password   = "MBOUMDA1998raymond.";            // SMTP account password example


$mail->setFrom('mboumdaulrich@gmail.com', 'Ulrich');
$mail->addAddress('fuhetienne0@gmail.com', 'etienne');
$mail->Subject = 'Confirmation de commande';
$mail->Body = 'Bonjour, Votre commande a été reçue avec succès.';
$mail->send();
$mail->SMTPDebug = 2;
   

echo $mail->ErrorInfo;
