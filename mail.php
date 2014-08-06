<?php 

require '/mail/PHPMailerAutoload.php';
if (!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['phone']) || !isset($_POST['projectType'])){
	die("Error - Empty Fields");
}
//Create a new PHPMailer instance
$mail = new PHPMailer();
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 587;   
//Username to use for SMTP authentication
$mail->Username = "noreplyparadise@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "tarponparadise";
//Set who the message is to be sent from
$mail->setFrom($_POST['email'], $_POST['name'] );
//Set an alternative reply-to address
// $mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to
// $mail->addAddress('travel@theflyshop.com', 'Travel - Fly Shop');
$mail->addAddress('alan.pome@gmail.com', 'Travel - Fly Shop');
//Set the subject line
$mail->Subject = 'Contact - Paradise';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
// $mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
//Replace the plain text body with one created manually
$mail->Body = "Received mail from: " . $_POST['name'] . "\r\n Email: " . $_POST['email'] . "\r\n Phone: " . $_POST['phone'] . "\r\n Message" . $_POST['projectType'];
// $mail->AltBody = $_POST['projectType'];
//Attach an image file
// $mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "1";
}
?>
