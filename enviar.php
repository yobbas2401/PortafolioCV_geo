<?php 
	$email = $_POST['email'];
	$asunto = $_POST['subject'];
	$mensaje = "Email: ".$email."<br> Mensaje:".$_POST['mesaje'];


	if(mail('yoba.vega2401@gmail.com', $asunto, $mensaje)){
		echo "Correo enviado";
	}
 ?>
