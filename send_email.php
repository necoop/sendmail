<?php
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

try {
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);
    $mail->CharSet = 'UTF-8';

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'amok2005@gmail.com';
    $mail->Password = 'ubvexzipjaxvuvau';
    $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS; // Полный путь к константе
    $mail->Port = 587;

    $mail->setFrom('amok2005@gmail.com', 'Тестовый сайт');
    $mail->addAddress('amok2005@gmail.com', 'Андрей');
    $mail->addReplyTo('amok2005@gmail.com', 'Тестовый сайт');

    $mail->isHTML(true);
    $mail->Subject = 'Это тема тестового письма';
    $mail->Body    = '<h1>Заголовок HTML</h1><p>Текст вашего письма</p>';
    $mail->AltBody = 'Текст вашего письма без HTML';

    $mail->send();
    echo 'Письмо отправлено успешно!';
} catch (PHPMailer\PHPMailer\Exception $e) { // Полный путь к классу Exception
    echo "Ошибка при отправке письма: {$mail->ErrorInfo}";
}
