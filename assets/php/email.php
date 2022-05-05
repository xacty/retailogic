<?php
mb_internal_encoding("UTF-8");

$to = 'info@retalogic.co';
$subject = 'Message from Retailogic.co';

$name = "";
$email = "";
$phone = "";
$message = "";

if( isset($_POST['name']) ){
    $name = $_POST['name'];
    //echo $name;

    $body .= "Nombre: ";
    $body .= $name;
    $body .= "\n\n";
}
if( isset($_POST['email']) ){
    $email = $_POST['email'];
    //echo $email;

    $body .= "";
    $body .= "Email: ";
    $body .= $email;
    $body .= "\n\n";
}
if( isset($_POST['phone']) ){
    $phone = $_POST['phone'];
    //echo $phone;

    $body .= "";
    $body .= "Teléfono: ";
    $body .= $phone;
    $body .= "\n\n";
}
if( isset($_POST['message']) ){
    $message = $_POST['message'];
    //echo $message;

    $body .= "";
    $body .= "Mensaje: ";
    $body .= $message;
    $body .= "\n\n";
}

$headers = 'De: ' .$email . "\r\n";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
mb_send_mail($to, $subject, $body, $headers);
    echo '<div class="status-icon valid"><i class="fa fa-check"></i></div>';
}
else{
    echo '<div class="status-icon invalid"><i class="fa fa-times"></i></div>';
}
