<?php
$nombre=$_POST['nombre']
$apellido=$_POST['apellido']
$correo=$_POST['correo']
$comentario=$_POST['comentario']

$remitente="From: $nombre <$email>";
$destino='aapg124@gmail.com';
$asunto=$nombre . ' envio una consulta a traves web';

$contenido='Nombre: ' .$nombre . "\r\n";
$contenido.='Apellido: ' .$apellido . "\r\n";
$contenido.='Correo: ' .$correo . "\r\n";
$contenido.='Comentario: ' .$comentario;


$remitente_usuario="From: sitio web <info@dominio.com>";
$asunto_usuario='Aviso de recibo de consulta';
$contenido_usuario='Hola' . $nombre . ' enviaste el siguiente comentario: ' . $comentario . "\r\n";
$contenido_usuario.='A la brevedad nos comunicaremos';



mail($destino,$asunto,$contenido,$remitente);
mail($email,$asunto_usuario,$contenido_usuario,$remitente_usuario);

header('location:contacto.php?envio=ok#contacto');


 ?>