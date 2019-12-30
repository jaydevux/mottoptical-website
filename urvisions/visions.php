<?php

	// include the database functions
	// make a connection to the database... now
  	mysql_connect('iowebconsulting.com','iowebco1_dbadmin','i()o.p=3951') or die('Couldn`t connect.!');
	mysql_select_db('iowebco1_contactos');
	$empresacontacto='optical';
	
	$query1 = mysql_query("select* from votacion;");
	$arra1 = mysql_fetch_array($query1);	
	
	if ($arra1!=null) {
		$opc1=$arra1['opc1'];	
		$opc2=$arra1['opc2'];
		$opc3=$arra1['opc3'];
		$opc4=$arra1['opc4'];
		$total=$opc1+$opc2+$opc3+$opc4;
		
		$porc1=round($opc1/$total,3)*100;
		$porc2=round($opc2/$total,3)*100;
		$porc3=round($opc3/$total,3)*100;
		$porc4=round($opc4/$total,3)*100;
	}else {
		$opc1=0;	
		$opc2=0;
		$opc3=0;
		$opc4=0;
		$porc1=0;
		$porc2=0;
		$porc3=0;
		$porc4=0;
	}

	
	if ($vote=='opc1') {
		mysql_query("update votacion set opc1=$opc1+1");
		$opc1=$opc1+1;
	}else if ($vote=='opc2') {
		mysql_query("update votacion set opc2=$opc2+1");
		$opc2=$opc2+1;
	}else if ($vote=='opc3') {
		mysql_query("update votacion set opc3=$opc3+1");
		$opc3=$opc3+1;
	}else if ($vote=='opc4') {
		mysql_query("update votacion set opc4=$opc4+1");
		$opc4=$opc4+1;
	}
	
if ($nombre!='') {
	//sacar fecha y hora 
	//date_default_timezone_set('America/Bogota');
		$dia=date('d');
		$mes=date('m');
		$ano=date('Y');
		$hora=date('h:i:s');
		$ampm=date('A');
		$nombre=$nombre.' '.$apellido;

		//verificar si la persona esta
		$persona_query_yaesta = mysql_query("select id from contactos where correo='$correo' and empresa='$empresacontacto'");
		$persona_yaesta = mysql_fetch_array($persona_query_yaesta);		
		
		if ($persona_yaesta==NULL) {//si la persona NO esta (resultado vacio)
			//insertar persona
	     	mysql_query("insert into contactos (correo, nombre, telefono, empresa) values ('$correo','$nombre','$telefono','$empresacontacto')");
			$persona_query=mysql_query("select id from contactos where correo='$correo' and empresa='$empresacontacto'");
			$persona = mysql_fetch_array($persona_query);
			$id_persona=$persona['id'];
			//insertar comentario con fecha y hora
			mysql_query("insert into comentarios (id_contacto, comentario , dia, mes, ano, hora, ampm) values ('$id_persona', '$comentario', '$dia', '$mes', '$ano', '$hora','$ampm')");
		
		} else if ($persona_yaesta!=NULL) { //si la persona SI esta (diferente de vacio)
			//sacar id
			$id_persona=$persona_yaesta['id']; 
			//insertar comentario con fecha y hora
			mysql_query("insert into comentarios (id_contacto, comentario, dia, mes, ano, hora, ampm) values ('$id_persona', '$comentario', '$dia', '$mes', '$ano', '$hora', '$ampm')");
		}
		
	/* enviar correo */
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
	
	$asunto = "You have post in  $empresa"; //asunto
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MK Vision Center - What  is Your Vision ?  </title>
<style type="text/css">
<!--
body { background-image: url(images/patern4.jpg); margin: 0; }
.results { font-size: 16px; color:#333333; font:Arial, Helvetica, sans-serif }
.style11 {font-size: 14px}
.style17 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style19 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #FFFFFF;
	font-size: 12px;
}
.style27 {font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; font-size: 50px;}
.style28 {font-family: "Times New Roman", Times, serif; font-size: 70px;}
.style34 {
	color: #000000;
}
.style35 {font-family: Verdana, Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; }
.style36 {font-size: 12px; font-weight: bold; font-family: Verdana, Arial, Helvetica, sans-serif;}
.style37 {font-family: Verdana, Arial, Helvetica, sans-serif; color: #000000; font-size: 12px; font-weight: bold; }
a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
.style42 {color: #FFFFFF; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 12px; }
.style43 {font-size: 12px}
.style44 { color: #000000; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
-->
</style>
</head>

<body >
<span class="results"><img src="images/separator.png" alt="" width="780" height="3" /></span>
<table width="793" border="0" align="center" cellpadding="0">
  <tr>
    <td width="789"><img src="images/banner.png" width="790" height="147" border="0" usemap="#Map2" /></td>
  </tr>
  <tr>
    <td height="12px"> </td>
  </tr>
   <tr>
    <td height="25" valign="top" bgcolor="#108FD4" style="padding:5px 5px" class="style19"><strong> Voting Results</strong>     </td>
  </tr>
   <tr>
     <td height="168" align="center" valign="middle" class="results"><table bgcolor="#fbfbfb" border="0" bordercolor="#fbfbfb" cellpadding="0" cellspacing="3" width="806">
       <tbody>
         <tr>
           <td bgcolor="#f0f0f0" height="30" width="16%"><center>
             <?php echo $porc1.' %';  ?>
           </center></td>
           <td bgcolor="#f0f0f0" height="30" width="13%"><center>
             <?php echo $opc1;  ?>
           </center></td>
           <td width="36%" align="right" bordercolor="#FBFBFB" bgcolor="#F0F0F0"><div style="width:<?=$porc1; ?>px; background-color:rgb(255, 153, 255); height:15px"></div></td>
           <td style="padding-left: 20px;" bgcolor="#f0f0f0" height="30" width="35%"><span class="style44">Unicef</span></td>
         </tr>
         <tr>
           <td bgcolor="#f0f0f0" height="30"><center>
             <?php echo $porc1.' %';  ?>
           </center></td>
           <td bgcolor="#f0f0f0" height="30"><center>
             <?php echo $opc2;  ?>
           </center></td>
           <td width="36%" align="right" bordercolor="#FBFBFB" bgcolor="#F0F0F0"><div style="width:<?=$porc2; ?>px; background-color:#009026; height:15px"></div></td>
           <td style="padding-left: 20px;" bgcolor="#f0f0f0" height="30"><span class="style44">American Cancer Society </span></td>
         </tr>
         <tr>
           <td bgcolor="#f0f0f0" height="30"><center>
             <?php echo $porc3.'%';   ?>
           </center></td>
           <td bgcolor="#f0f0f0" height="30"><center>
             <?php echo $opc3;  ?>
           </center></td>
           <td width="36%" align="right" bordercolor="#FBFBFB" bgcolor="#F0F0F0"><div style="width:<?=$porc3; ?>px; background-color:#D9BA00; height:15px"></div></td>
           <td style="padding-left: 20px;" bgcolor="#f0f0f0" height="30"><span class="style44">Make a wish </span></td>
         </tr>
         <tr>
           <td bgcolor="#f0f0f0" height="30"><center>
             <?php echo $porc4.'%';   ?>
           </center></td>
           <td bgcolor="#f0f0f0" height="30"><center>
             <?php echo $opc4;  ?>
           </center>
           </td>
           <td width="36%" align="right" bordercolor="#FBFBFB" bgcolor="#F0F0F0"><div style="width:<?=$porc4; ?>px; background-color:#013394; height:15px"></div></td>
           <td style="padding-left: 20px;" bgcolor="#f0f0f0" height="30"><span class="style44">Prevent Blindness </span></td>
         </tr>
       </tbody>
     </table></td>
   </tr>
    <tr>
    <td height="36" valign="top" class="results">&nbsp;</td>
  </tr>
  
  <tr>
    <td><?php

	$color="#A5C4DC";
	$color1="#FFFFFF";
	$tablecontactos="contactos";
	$tablecomentarios="comentarios";
	$empresatabla="optical";
	$num=0;
	$querycontactos=mysql_query("select* from $tablecontactos where empresa='$empresatabla' order by id DESC");
	
		while ($tupla=mysql_fetch_array($querycontactos))	{
			$num++;
			$id_contacto=$tupla['id'];
			$querycomentarios=mysql_query("select* from $tablecomentarios where id_contacto='".$id_contacto."'");
			$comentario=mysql_fetch_array($querycomentarios);

		  
		  
		  echo '<table width="100%" border="0" cellspacing="0" cellpadding="0" class="results">
      <tr>
        <td width="56%" bgcolor="#108fd4"><table border="0" cellpadding="0" width="810">
            <tbody>
              <tr>
                <td width="13">&nbsp;</td>
                <td width="108"><span class="style42">Vision Post  # '.$num.'</span></td>
                <td width="96"><span class="style43"></span></td>
                <td width="251"><span class="style42">Date:  '. $comentario["mes"].'/'. $comentario["dia"].'/'. $comentario["ano"].'  -  '. $comentario["hora"].' '.$comentario["ampm"].'</span></td>
                <td width="17"><span class="style43"></span></td>
                <td width="185"><span class="style42">User: '. $tupla["nombre"].'</span></td>
              </tr>
            </tbody>
        </table></td>
      </tr>
      <tr>
        <td><table bgcolor="#fbfbfb" border="0" bordercolor="#fbfbfb" cellpadding="0" cellspacing="5" width="831">
            <tbody>
              <tr>
                <td bgcolor="#f0f0f0" valign="middle"><table align="center" border="0" cellpadding="0" width="806">
                    <tbody>
                      <tr>
                        <td width="802"><br />
                            <span class="style40">'.$comentario["comentario"].'</span></td>
                      </tr>
                    </tbody>
                </table>
                    <br />
                    <center>
                    </center>
                  <center>
                    </center>
                  <center>
                    </center>
                  <center>
                    </center>
                  <center>
                    </center>
                  <center>
                    </center>
                  <center>
                  </center></td>
              </tr>
            </tbody>
        </table></td>
      </tr>
      <tr>
        <td height="21">&nbsp;</td>
      </tr>
    </table>';
		}
	
	
?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<map name="Map2" id="Map2">
  <area shape="rect" coords="357,71,448,119" href="http://www.mkvisioncenter.com/" target="_blank" />
<area shape="rect" coords="305,119,491,142" href="http://www.mkvisioncenter.com/" target="_blank" />
</map></body>
</html>
