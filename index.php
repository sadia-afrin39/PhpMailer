<?php
    require_once('PHPMailerAutoload.php');

    $mail = new PHPMailer();
    $mail -> isSMTP();
    $mail -> SMTPAuth = true;
    $mail -> SMTPSecure = 'ssl';
    $mail -> Host = 'smtp.gmail.com';
    $mail -> Port = '465';
    $mail -> isHTML();
    $mail -> Username = 'socialnetworkmail2@gmail.com';
    $mail -> Password = '';
    $mail -> SetFrom ('no-reply@howcode.org');
    $mail -> Subject = "Hello World";
    $mail -> Body = "A test email";
    $mail -> AddAddress('francis@howcode.org');
    $mail -> Send();

?>