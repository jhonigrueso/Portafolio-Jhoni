<?php
//En el destino colocar el correo alque quieres que lleguen los datos del contacto de tu formulario
$destino='jhonigrueso2@gmail.com';
$subject = 'CONCTATO DE MI PORTAFOLIO';
$nombre = $_POST["nombre"];
$email = $_POST["correo"];
$mensaje = $_POST["mensaje"];
/*$contenido = "Nombre: " . $nombre  . "\nCorreo: " . $email . "\nAsunto: " . $mensaje;*/


$message = "************************************************** \r\n" .
  "MENSAJE DE MI PORTAFOLIO!  \r\n" .
  "************************************************** \r\n" .

  "NOMBRE: " . $nombre . "\r\n" .
  "CORREO: " . $email . "\r\n" .
  "MENSAJE: " . $_POST["mensaje"] . "\r\n";

$headers = "From: " . $nombre . "<" . $email . "> \r\n" .
  "Reply-To: " . $email . "\r\n" .
  "MIME-Version: 1.0" . "\r\n" .
  "Content-type:text/html;charset=UTF-8" . "\r\n";


mail($destino,$subject, $message, $headers);
