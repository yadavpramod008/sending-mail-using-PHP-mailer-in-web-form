
<?php

$email=$_POST['email'];


?>
<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions

    //Server settings
   // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
;                           // SMTP password
  $mail->Username = '  enter your email id here like  xxxxxx@gmail.com';                 // SMTP username
    $mail->Password = 'password here xxxxxxxxxx of above email id'; 
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;      
    //Recipients
    $mail->setFrom('user@gmail.com', 'pramod');
   // $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
   $mail->addAddress($email);               // Name is optional
  //  $mail->addReplyTo('info@example.com', 'Information');
   // $mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'Welcome to [ babyKILLER ]';
  //  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if($mail->send())
{
   echo "<br><br><br>Message sent";
   header("Location:index.php");
}
else
{
echo "not sent" ;
}
