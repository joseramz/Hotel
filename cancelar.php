<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cancelar reserva</title>
</head>

<body>
<?php
  	
	include ("BBDD/conexion.php");	
		
	
	$conexion=mysql_connect($host,$usuario,$password) or die("problema al conectar al host");
	
	mysql_select_db($basedatos,$conexion) or die ("problemas al conectar a la base de datos");
	
	//buscamos el id para eliminarlo
	$resultado= mysql_query("DELETE FROM hotel.reservas WHERE id='$_POST[id]'");
	
	if (!$resultado) 
	{
		die('No se ha podido cancelar la reserva: ' . mysql_error());
	
	}
	
	else
	{
		
		echo"Se ha podico cancelar la reserva";
		mysql_close($conexion);
			
	}
	
	?>
</body>
</html>
