<?php
include_once 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
 
function sendMail(string $to, string $from, string $from_name, string $subject, string $body) {
    $mail = new PHPMailer(true);  // Crée un nouvel objet PHPMailer
    $mail->IsSMTP(); // active SMTP
    $mail->SMTPDebug = 0;  // debogage: 1 = Erreurs et messages, 2 = messages seulement
    $mail->SMTPSecure = 'tls'; //or ssl
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587; 
 
    $mail->SMTPAuth = true;  // Authentification SMTP active
    $mail->Username = "youremail@gmail.com";
    $mail->Password = 'yourpassword';
 
        $mail->isHTML(true);
    $mail->SetFrom($from, $from_name);
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AddAddress($to);
    $mail->Send();
}