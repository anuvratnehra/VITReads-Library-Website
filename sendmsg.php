<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mysqli = new mysqli('localhost', 'root', '', 'per_lib');
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$message = mysqli_real_escape_string($mysqli, $_POST['message']);

$email2 = "";
$subject = "Query Message";

if (strlen($fname) > 50) {
    echo 'fname_long';
} elseif (strlen($fname) < 2) {
    echo 'fname_short';
} elseif (strlen($email) > 50) {
    echo 'email_long';
} elseif (strlen($email) < 2) {
    echo 'email_short';
} elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo 'eformat';
} elseif (strlen($message) > 500) {
    echo 'message_long';
} elseif (strlen($message) < 3) {
    echo 'message_short';
} else {
    require 'vendor/autoload.php';
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'localhost';
    $mail->SMTPAuth = true;
    $mail->Username = 'admin@vit.ac.in';
    $mail->Password = '12345';
    $mail->Port = 25;
    $mail->AddReplyTo($email);
    $mail->From = $email;
    $mail->FromName = $fname;
    $mail->addAddress('library@vit.ac.in');

    $mail->isHTML(true);

    $mail->Subject = $subject;
    $mail->Body = $message;

    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'true';
    }
}