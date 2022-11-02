<?php

//Conecto mi form / nombre, correo, telefono y mensaje/ con el server a traves del name.

$nombre = $_POST['nombre']
$correo = $_POST['correo']
$telefono = $_POST['telefono']
$mensaje = $_POST['mensaje']

// como me va a llegar el cuerpo del mail a mi, osea lo que la gente escribio en el formulario

$mensaje = "Este mensaje fue enviado por" . $nomnbre . ",\r\n";
$mensaje .= "Su e-mail es: " . $correo .  ",\r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] .  ",\r\n";
$mensaje .= "Enviado el " . date('d/m/Y' , time());

$para = 'ariel.schinocca@live.com.ar'; // el mail a donde van a llegar los mensajes
$asunto = 'Mensaje de mi sitio web'; // el asunto de los mails que me llegan

//funcion mail
//
mail($para, $asunto, utf8_decode($mensaje), $header);

//Redireccion al haber enviado el form

header('Location:mensajeForm.html');

?>

