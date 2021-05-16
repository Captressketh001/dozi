<?php
    require 'includes/PHPMailer.php';
    require 'includes/SMTP.php';
    require 'includes/Exception.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    $mail = new PHPMailer();

    $mail->isSMTP();

    $mail->Host = "smtp.gmail.com";

    $mail->SMTPAuth = "true";

    $mail->SMTPSecure = "tls";

    $mail->Port = "587";

    $mail->username = "shininglite2012@gmail.com";

    $mail->Password = "temitope1997";

    $mail->Subject = "Test Email using PHPmailer";

    $mail->setfrom("shininglite2012@mail.com");
 
    $mail->Body = "This is a plain text email body";

    $mail->addAddress("shiniglite2012@gmail.com");

    if($mail->Send()){
        echo "Email Sent..";
    } else{
        echo "Error";
    }

    $mail->smtpClose();
?>