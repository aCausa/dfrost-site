<?php

// Llamando a los campos
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Datos para el correo
$destinatario = "a.causa21@gmail.com";
$asunto = "$subject";

$mail = "De: $name \n";
$mail .= "Correo: $email \n";
$mail .= "Mensaje: $message";

// Enviando Mensaje
mail($destinatario, $asunto, $mail);
header('contact.html');

?>
