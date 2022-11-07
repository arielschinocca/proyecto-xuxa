<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "mensajeForm.css">
    <title>Document</title>
</head>
<body>
    <h1>Gracias por tu mensaje, te respondemos a la brevedad</h1>
    <?php


//Conecto mi form / nombre, correo, telefono y mensaje/ con el server a traves del name.

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensajeForm = $_POST['mensaje'];

/*
$conectar=conn(); //ejecuta las conexiones a la base de datos
$sql="INSERT INTO usuarios ( nombre, correo, telefono, mensaje) 
VALUES ('$nombre', '$correo', '$telefono', '$mensajeForm' )";
$resul = mysqli_query($conectar , $sql)or trigger_error("Query Failed! SQL- Error: ".mysqli_error($conectar));

echo "$sql";
*/

// como me va a llegar el cuerpo del mail a mi, osea lo que la gente escribio en el formulario

$mensaje .= "Este mensaje fue enviado por" . $nomnbre . ",\r\n";
$mensaje .= "Su e-mail es: " . $correo .  ",\r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] .  ",\r\n";
$mensaje .= "Enviado el " . date('d/m/Y' , time());

$para = 'ariel.schinocca@live.com.ar'; // el mail a donde van a llegar los mensajes
$asunto = 'Mensaje de mi sitio web'; // el asunto de los mails que me llegan

//funcion mail

mail($para, $asunto, utf8_decode($mensaje), $header);

//Redireccion al haber enviado el form

header('Location:index.html');


?>
    <script>
        setTimeout(function(){
            window.location.replace('index.html');
        },2000);
    </script>

</body>
</html>



