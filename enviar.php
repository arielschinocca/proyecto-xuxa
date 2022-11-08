<?php

if ( isset($_POST['nombre'])) {
    if ( !empty($_POST['nombre']) && !empty($_POST['correo'] && !empty($_POST['mensaje']))) {
        $name = $_POST['nombre'];
        $email = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $mensaje = $_POST['mensaje'];


        $para = "From: ariel.schinocca@live.com.ar" . "\r\n";
        $header = $_POST['correo'] . "\r\n";
        $header .= $_POST['nombre']. "\r\n";
        $header .= $_POST['telefono'];
        $header = "X-Mailer: PHP/" . phpversion();
        $header =  $_POST['correo'];

        $mail = mail($para, $name, $mensaje, $header );
        if ($mensaje) {
            echo "<h4> mail enviado exitosamente! </h4>";
        }
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

// header("Location:index.html");
?>