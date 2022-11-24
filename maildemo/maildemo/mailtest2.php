<?php

$subject = "Contact From website";

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$to = $_POST['to'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$content = " New Message From website <br/>
 Name is {$name} <br/> Mobile is {$mobile}<br/>
 Subject is {$subject}<br/>Message is {$message}<br/> ";

 $body = $content;

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Debugoutput = 'html';
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure= 'tls';
    $mail->Port = 587;
    $mail->Username = 'avyadav2903@gmail.com';
    $mail->Password = 'jvxg veci lyye zscc';                                   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('avyadav2903@gmail.com', 'Mailer');
    $mail->addAddress($to, $to);     //Add a recipient
   

    //Attachments
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $body;
    $mail->AltBody = $body;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}