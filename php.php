<?php 
$myemail = 'sabri.0930@gmail.com';
$name = $_POST['con_name'];
$email = $_POST['con_email'];
$message = $_POST['con_message'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente";
?>
