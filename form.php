<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $from = 'From: Jacksondockery.com'; 
    $to = 'jhdocker@gmail.com'; 
    $subject = 'web portfolio inquiry';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";



if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Your message has been sent!</p>';
    } else { 
        echo '<p>Something went wrong, go back and try again!</p>'; 
    }
}
?>