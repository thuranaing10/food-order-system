<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';


$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
   // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = "smtp.gmail.com";// Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'beginners2419@gmail.com';                 // SMTP username
    $mail->Password = 'beginners@!';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
$theirname = $_POST["name"];
$theiremail = $_POST["email"];
$theirsubject=$_POST["subject"];
//echo $theiremail;
//echo $theirsubject;
$message = $_POST["text"];

    //Recipients
    $mail->setFrom($theiremail, $theirname);
    $mail->AddReplyTo($theiremail, $theirname);
    $mail->addAddress('letsreadinfo853@gmail.com');     // Add a recipient
   
    
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $theirsubject;
    $mail->Body    = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();

echo '<script language="Javascript">
      alert("Thank You! Your message has been sent.")
      location.replace("contact.php");
	  </script>';
	  
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}