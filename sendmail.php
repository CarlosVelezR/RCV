<?php
//Autor: Carlos Andrés Vélez	Fecha: Septiembre 2017
//Descripción: Función que permite contacterse desde la página web por medio del formulario, y es enviado al correo.
if(isset($_POST['Email'])) {
//Correo a enviar mensaje y asunto
$email_to = "sac@rcvsystem.com";
$email_subject = "Contacto desde el sitio web";
// Validacion de datos.
if(!isset($_POST['Name']) ||
!isset($_POST['Email']) ||
!isset($_POST['Phone']) ||
!isset($_POST['Message'])) {
//Excepcion
echo "<b>Ocurrió un error y el formulario no ha sido enviado.</b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br/>";
die();
}
$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['Name'] . "\n";
$email_message .= "E-mail: " . $_POST['Email'] . "\n";
$email_message .= "Telefono: " . $_POST['Phone'] . "\n";
$email_message .= "Comentarios: " . $_POST['Message'] . "\n\n";
// Ahora se envía el e-mail usando la función mail() de PHP.
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
echo "<script type=\"text/javascript\">window.alert('Mensaje enviado, pronto lo contactaremos');
window.location.href = 'http://www.rcvsystem.com/';</script>"; 
}
?>