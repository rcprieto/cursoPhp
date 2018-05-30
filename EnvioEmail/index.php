<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once("vendor/autoload.php");

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Set the hostname of the mail server
$mail->Host = 'smtp.umbler.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "contato@gosoftwares.com.br";
//Password to use for SMTP authentication
$mail->Password = "rpxxxxx";
//Set who the message is to be sent from
$mail->setFrom('contato@gosoftwares.com.br', 'Rodrigo Prieto');
//Set an alternative reply-to address
$mail->addReplyTo('contato@gosoftwares.com.br', 'Rodrigo Prieto');
//Set who the message is to be sent to
$mail->addAddress('rcprieto@gmail.com', 'Rodrigo Prieto');
//Set the subject line
$mail->Subject = 'Teste de Envio PHP';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('content.html'), __DIR__);
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message Enviada!";
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}


?>