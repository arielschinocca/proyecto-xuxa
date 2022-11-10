<?php

if ( isset($_POST['usuarioNombre'])) {
    if ( !empty($_POST['usuarioNombre']) && !empty($_POST['usuarioCorreo'] && !empty($_POST['usuarioMensaje']))) {
        $name = $_POST['usuarioNombre'];
        $email = $_POST['usuarioCorreo'];
        $telefono = $_POST['usuarioTelefono'];
        $mensaje = $_POST['usuarioMensaje'];


        $para = "From: ariel.schinocca@live.com.ar" . "\r\n";
        $header = $_POST['usuarioCorreo'] . "\r\n";
        $header .= $_POST['usuarioNombre']. "\r\n";
        $header .= $_POST['usuarioTelefono'];
        $header = "X-Mailer: PHP/" . phpversion();
        $header =  $_POST['usuarioCorreo'];

        $mail = mail($para, $name, $mensaje, $header );
        header("Location: mensajeForm.html");
    }
}

// $nombre = $_POST['nombre'];
// $mail = $_POST['email'];
// $mensaje = $_POST['mensaje'];

// $header = 'From: ' . $mail . " \r\n";
// $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
// $header .= "Mime-Version: 1.0 \r\n";
// $header .= "Content-Type: text/plain";

// $mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
// $mensaje .= "Su e-mail es: " . $mail . " \r\n";
// $mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
// $mensaje .= "Enviado el " . date('d/m/Y', time());

// $para = 'fernandocibau@hotmail.com';
// $asunto = 'Mensaje de mi sitio web';

// mail($para, $asunto, utf8_decode($mensaje), $header);

    
?>