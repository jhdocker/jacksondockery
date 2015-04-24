<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$from = 'From: Jacksondockery.com';
$to = 'jhdocker@gmail.com';
$subject = 'web portfolio inquiry';

require_once 'mandrill/src/Mandrill.php';

try {
    $mandrill = new Mandrill('kmsp9DSexPVobV790ewGRA');
    $message = array(
        'html' => '<p>' . $name . '<br />' . $email . '<br />' .  $message . '</p>',
        'text' => 'Example text content',
        'subject' => 'sent from jacksondockery.com',
        'from_email' => 'sender.email@example.com',
        'from_name' => 'jacksondockery.com',
        'to' => array(
            array(
                'email' => 'jhdocker@gmail.com',
                'name' => 'Recipient Name',
                'type' => 'to'
            )
        ),
        'headers' => array('Reply-To' => 'message.reply@example.com'),



    );
    $async = false;
    $result = $mandrill->messages->send($message, $async);
    //print_r($result);
    echo "<script>
             alert('message sent succesfully');
             window.history.go(-1);
            </script>";
    /*
    Array
    (
        [0] => Array
            (
                [email] => recipient.email@example.com
                [status] => sent
                [reject_reason] => hard-bounce
                [_id] => abc123abc123abc123abc123abc123
            )

    )
    */
} catch(Mandrill_Error $e) {
    // Mandrill errors are thrown as exceptions
    echo 'A mandrill error occurred: ' . get_class($e) . ' - ' . $e->getMessage();
    // A mandrill error occurred: Mandrill_Unknown_Subaccount - No subaccount exists with the id 'customer-123'
    throw $e;
}
?>