<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $from = 'From: Jacksondockery.com';
    $to = 'jhdocker@gmail.com';
    $subject = 'web portfolio inquiry';

    //$body = "From: $name\n E-Mail: $email\n Message:\n $message";



//if ($_POST['submit']) {
//    if (mail ($to, $subject, $body, $from)) {
//        echo '<p>Your message has been sent!</p>';
//    } else {
//        echo '<p>Something went wrong, go back and try again!</p>';
//    }
//}

require_once 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 1;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'jacksondockerysite@gmail.com';                 // SMTP username
$mail->Password = 'WebDev32';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = $email;
$mail->FromName = $name;
$mail->addAddress('jhdocker@gmail.com', 'Joe User');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = $message . "<br />" . $email . "<br />" . $name . "<br />" . $phone;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo "<script>
             alert('message sent succesfully');
             window.history.go(-1);
            </script>";
}

?>