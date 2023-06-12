<?php
$nombre = $_POST ['name'];
$mail = $_POST ['email'];
$asunto = $_POST ['asunto'];
$mensaje = $_POST ['mensaje'];

$mensaje = "Este mensaje fue enviado por" . $nombre .   ". \r\n";    
$mensaje .= "Su Email es: " . $mail . "\r\n";
$mensaje .= "El asunto es: " . $asunto . "\r\n";
$mensaje .= "El mensaje es: " . $mensaje . "\r\n";


$para = 'J.carlos_publicidad2@hotmail.com';
$asu = "Este mensaje es enviado desde la web de publimetal";

$mail($para, $asu, utf8_decode($mensaje), $header);

$header('location: correo.html');

?>