<?php

$numero = $_POST['numero'];
$remitente = 'infokreatech@gmail.com';
ini_set('sendmail_from', $remitente);

$header = "From: ".$remitente."\r\n";
$header = "X-Mailer: PHP/" . phpversion() . "\r\n";
$header = "Mime-Version: 1.0  \r\n";
$header = "Content-Type: text/plain";

$mensaje = "El número del usuario es: " . $numero . "\r\n";
$mensaje = "Enviado el " . date('d/m/Y', time());

$para = 'info@kreatech.pe';
$asunto = 'Información de servicio';

$enviar_email = mail($para, $asunto, utf8_decode($mensaje), $header);
echo ($enviar_email) ? '<div class="success">El e-mail ha sido enviado satisfactoriamente</div>' : 'Error: El e-mail no ha sido enviado.';
//header("Location: index.html");
?>

<?php 
/*
if(isset($_POST["numero"]))  
{
	// Read the form values
	$success = false;
	$senderEmail = isset( $_POST['numero'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['numero'] ) : "";
	
	//Headers
	$to = "info@kreatech.pe";
    $subject = 'Información de servicio';
	$headers = 'MIME-Version: 1.0'. "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1'. "\r\n";
	
	//body message
	$message = "Número de usuario: ". $senderEmail . "";
	
	//Email Send Function
    $send_email = mail($to, $subject, $message, $headers);
      
    echo ($send_email) ? '<div class="success">El e-mail ha sido enviado satisfactoriamente</div>' : 'Error: El e-mail no ha sido enviado.';
} 
else {
	echo '<div class="failed">Falló el envío de tu e-mail</div>';
}
echo "Hola"; */
?>