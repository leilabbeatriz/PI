<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["enviar"])){
    $mailer = new PHPMailer(true);
    $mailer->isSMTP();
    $mailer->Host = 'smtp.gmail.com';
    $mailer->SMTPAuth = true;
    $mailer->Username = 'smartfitpi@gmail.com';
    $mailer->Password = 'kuqdcegccmqklzdm';
    $mailer->SMTPSecure = 'ssl';
    $mailer->Port = 465;

    $mailer->setFrom('smartfitpi@gmail.com');

    $mailer->addAddress($_POST['email']);
    $mailer->isHTML(true);
    $mailer->Subject = $_POST['assunto'];
    $mailer->Body = $_POST['mensagem'];

    $mailer->send();

    echo "<script> alert('email enviado com sucesso :)'); </script>";


    // $email = $_POST['email'];
    // $assunto = $_POST['assunto'];
    // $mensagem = $_POST['mensagem'];
}