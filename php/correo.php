<?php
include("PHPMailer/src/PHPMailer.php");
include("PHPMailer/src/SMTP.php");
//Instantiation and passing `true` enables exceptions

try {
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.mailtrap.io';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Username = '0ff43d9297936d';
    $mail->Password = '078b139550a7ba';

    $mail->setFrom($_POST['correo'], $_POST['nombre']);
    $mail->addAddress('empezalo20@gmail.com');
    $mail->addReplyTo($_POST['correo'], $_POST['nombre']);

    $mail->isHTML(true);
    $mail->Subject = 'Enviado por ' . $_POST['nombre'];
    $mail->Body = '<h1 align=center >Nombre: ' . $_POST['nombre'] . '<br>Email: ' . $_POST['correo'] . '<br>Mensaje: ' . $_POST['mensaje'] . '</h1>';
    $mail->send();
    echo 'Message has been sent';

}catch (Exception $e) {
    echo "NO SE PUDO ENVIAR EL CORREO: {$mail->ErrorInfo}";
}






