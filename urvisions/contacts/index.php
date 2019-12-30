<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Contacts</title>
</head>
<body>
<form name="form" method="post">
<input type="hidden" name="borrar" id="borrar" />
<strong>Contacts </strong><br />
<a href="index.php?encuesta=1">delete poll</a><br />
<br />
<?php
	//echo $borrar.'  ';
	echo $encuesta.'  ';
	
	mysql_connect('iowebconsulting.com','iowebco1_dbadmin','i()o.p=3951') or die('Couldn`t connect.!');
	mysql_select_db('iowebco1_contactos');
	
	
	$color="#A5C4DC";
	$color1="#FFFFFF";
	$tablecontactos="contactos";
	$tablecomentarios="comentarios";
	$empresatabla="optical";
	
	if ($encuesta==1) {
		$queryborrarenc=mysql_query("delete from votacion;");
		echo 'poll deleted';
	}

	$queryborrar=mysql_query("select id from $tablecontactos where correo='$borrar' and empresa='$empresatabla';");
	$tuplaborrar=mysql_fetch_array($queryborrar);
	$idborrar=$tuplaborrar['id'];
	$queryborrarcomentario=mysql_query("delete from $tablecomentarios where id_contacto='$idborrar';");
	$queryborrarcontacto=mysql_query("delete from $tablecontactos where id='$idborrar';");
	
	
	$querycontactos=mysql_query("select* from $tablecontactos where empresa='$empresatabla' order by id DESC;");
	
	
	//$tupla=mysql_fetch_array($queryselect);
	
		echo "<table Border=3 CellPadding=5><tr style='color:#6387D3'>";
		echo "<th>Num</th><th>Name</th><th>Email</th><th>Vision</th><th>Date (d/m/a) [Time]</th><th>Delete</th>";
		$num=0;
		while ($tupla=mysql_fetch_array($querycontactos))	{
			$num=$num+1;
			$id_contacto=$tupla['id'];
			$querycomentarios=mysql_query("select* from $tablecomentarios where id_contacto='".$id_contacto."';");
			//while hasta que haya comentarios de ese contacto
			$comentario=mysql_fetch_array($querycomentarios);
			echo"<tr bgcolor=$color>";
			echo "<td>".$num."</td>";
			echo "<td>".$tupla['nombre']."</td>";
			echo "<td>".$tupla['correo']."</td>";
			echo "<td>".$comentario['comentario']."</td>";
echo "<td>".$comentario['dia']."/".$comentario['mes']."/".$comentario['ano']." [".$comentario['hora']." ".$comentario['ampm']."]</td>";
			echo "<td><a href='index.php?borrar=".$tupla['correo']."'>delete</a></td>";
			echo"</tr>";
			//s
			if ($tupla=mysql_fetch_array($querycontactos)) {
				$num=$num+1;
				$id_contacto=$tupla['id'];
				$querycomentarios=mysql_query("select* from $tablecomentarios where id_contacto='".$id_contacto."';");
				$comentario=mysql_fetch_array($querycomentarios);
				echo"<tr bgcolor=$color1>";
				echo "<td>".$num."</td>";
				echo "<td>".$tupla['nombre']."</td>";
				echo "<td>".$tupla['correo']."</td>";
				echo "<td>".$comentario['comentario']."</td>";
echo "<td>".$comentario['dia']."/".$comentario['mes']."/".$comentario['ano']." [".$comentario['hora']." ".$comentario['ampm']."]</td>";
				echo "<td><a href='index.php?borrar=".$tupla['correo']."'>delete</a></td>";
				echo"</tr>";	
			}			
		}
	echo "</table>";
	
	
	// Cerrar la conexion
	mysql_close();
	//echo "<a href='index.html'>VOLVER AL FORMULARIO</a>";
	
	
?>
</form>
</body>
</html>
