<?php  

// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];
$archivo = $_FILES['archivo'];

// Datos para el correo
$destinatario = "muni2020shilla@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Asunto: $asunto \n";
$carta .= "archivo: $archivo";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:alerta.php');

?>