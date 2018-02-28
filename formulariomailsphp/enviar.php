<?php 

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$header = 'From: ' . $email . "\r\n";
$header .= 'X-Mailer: PHP/' . phpversion() . "\r\n";
$header .= 'Mime-Version: 1.0 \r\n';
$header .= 'Content-Type: text/plain';
$mensajeCorreo = "This message was sent by: " . $nombre . "\r\n";
$mensajeCorreo .= "Email: " . $email . "\r\n";
$mensajeCorreo .= "Mensaje:: " . $mensaje . "\r\n";
$para = "email aqui";
$asunto = "Contacto de sitio web";
mail($para, $asunto, utf8_encode($mensajeCorreo), $header );