<?php 
	$email = $_POST['Email'];
	$asunto = $_POST['Subject'];
	$mensaje = "Email: $email<br> Mensaje:".$_POST['mensaje'];


	if(mail('yoba.vega2401@gmail.com', $asunto, $mensaje)){
		echo "Correo enviado";
	}
 ?>