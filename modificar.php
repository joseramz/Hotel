<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modificar reserva</title>
<?php
  
	include('cabecera.php');
?>
</head>

<body>
<div id="contenedor">
<?php
		
	include ("BBDD/conexion.php");	
		
	
	$conexion=mysql_connect($host,$usuario,$password) or die("problema al conectar al host");
	
	$submit = $_POST['submit'];
	
/*	Se guarda las modificaciones de la reserva*/
	if ($submit == 'Guardar modificación')
	{
	
		mysql_select_db($basedatos,$conexion) or die ("problemas al conectar a la base de datos");
		
		$resultado= mysql_query("UPDATE hotel.reservas SET nombre='$_POST[nombre]',apellido='$_POST[apellido]',correo='$_POST[correo]' WHERE id='$_POST[id]'");
		
		if (!$resultado) 
		{
			die('No se ha podido hacer la actualización de la reserva: ' . mysql_error());
		
		}
		
		else
		{
			
			echo"Se ha actualizado los datos datos de la reserva correctamente";
			mysql_close($conexion);
				
		}
	}
	
/*	Salir sin guardar la reserva*/
	if ($submit == 'Salir sin guardar')
	{
		header( 'Location: index.php' ) ;
	}
	
	//Cancelar la reserva
	if ($submit == 'Cancelar reserva')
	{
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
	}
	
	?>

   <div class="empuje"></div>
      
  </div>   
<!-- inicio pie -->

     <p><?php
     include('pie.php');
	?></p>
 
    
  
    <!-- final pie --> 
</body>
</html>
