<?php

require 'connect.php';

$name=$_POST['name'];
$email=$_POST['email'];
$q1=$_POST['q1'];
$q2=$_POST['q2'];
$q3=$_POST['q3'];
$q4=$_POST['q4'];
$q5=$_POST['q5'];
$q6=$_POST['q6'];
$q7=$_POST['q7'];
$q8=$_POST['q8'];
$q9=$_POST['q9'];

if ($name!='') {
		$dia=date('d');
		$mes=date('m');
		$ano=date('Y');
		$hora=date('h:i:s');
		$ampm=date('A');

mysql_query("insert into results (name, email, q1, q2, q3, q4, q5, q6, q7, q8, q9) values ('$name','$email','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9')");
		

	$empresa="MK Vision Center";
	$correoEmpresa="contact@mottoptical.com";
	
	$mime_boundary = "----erttrtrt----".md5(time());
	
	$message .= "--$mime_boundary\r\n";
	$message .= "Content-Type: text/html; charset=UTF-8\r\n";
	$message .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
	
	$headers = "From: $empresa <$correoEmpresa>\r\n"; //headers
	$headers .= "Reply-To: $empresa <$correoEmpresa>\r\n"; //headers
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-Type: multipart/alternative; boundary=\"$mime_boundary\"\r\n";
	
	$asunto = "Some one answer the poll  $"; //asunto
	$mensajeCliente = "<html><body>Hi $nombre, <br>Thank you for make your post. Te estaremos respondiendo lo más pronto posible. <br>Comercial Department<br>MK Vision<br><br>This message has been automatically generated from mottoptical.com</body></html>"; //mensaje cliente
	
	//mensaje a Cliente para decirle que fue recibido el mensaje
	//mail($correo,$asunto,$message.$mensajeCliente,$headers);
	
	$mensajeNotificacion="<html><body>
							A visitor just post in $empresa
							<br> 
							<br> Data:
							<br> Name: $nombre 
							<br> E-mail: $correo 
							<br> Comment: $comentario
							<br> This message has been automatically generated from mottoptical.com			
						</body></html>";
	
	//mensaje a empresa notificandoles que una persona nueva se contacto con ellos
	 
	//mail("info@iodec.net","Contact MK Vision ",$message.$mensajeNotificacion,$headers);
	//mail("jair3d@hotmail.com","Contact MK Vision",$message.$mensajeNotificacion,$headers);

}


?>
