<?php

/*Conexión formulario con DB table*/
$servidor = "localhost";
$usuario = "root";
$clave = "";
$bd = "publimetal_db";

$coneccion = new mysqli($servidor, $usuario, $clave, $bd);

if(isset($_POST['enviar']))
{
        $nombre = $_POST['name'];
        $mail = $_POST['email'];
        $asunto = $_POST['asunto'];
        $mensaje = $_POST['mensaje'];


        /*Envio a la DB*/

        $sql = mysqli_query($coneccion,"INSERT INTO contacto (nombre, email, asunto, mensaje) 
        VALUES ('$nombre', '$mail', '$asunto', '$mensaje')");

       /*Información para enviar al correo*/  
        /*$mensaje = "Este mensaje fue enviado por" . $nombre .   ". \r\n";    
        $mensaje .= "Su Email es: ".$mail . "\r\n";
        $mensaje .= "El asunto es: ".$asunto . "\r\n";
        $mensaje .= "El mensaje es: ".$mensaje . "\r\n";


        $para = 'J.carlos_publicidad2@hotmail.com';
        $asu = "Este mensaje es enviado desde la web de publimetal";
        */
        @mail($para, $asu, utf8_decode($mensaje), $header);
        
        header('location: ../correo.html');
        if($mail){
            echo "<h4>¡Mail enviado exitosamente!</h4>";
    
        } 
    } 
?>