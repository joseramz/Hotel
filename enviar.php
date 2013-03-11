<head>
<?php
  
	include('cabecera.php');
?>
</head>


<div id="contenedor">
  <p>
<?php
		
	include ("BBDD\conexion.php");	
		
	
	$conexion=mysql_connect($host,$usuario,$password) or die("problema al conectar al host");
	
	mysql_select_db($basedatos,$conexion) or die ("problemas al conectar a la base de datos");

//Se realiza la inserción de la base de datos	

	$resultado= mysql_query("INSERT INTO hotel.reservas (id,nombre,apellido,correo,telefono,habitacion,fecha,noches) VALUES (NULL,'$_POST[nombre]','$_POST[apellido]','$_POST[correo]','$_POST[telefono]','$_POST[habitacion]','$_POST[fecha]','$_POST[noches]')");

	if (!$resultado) 
	{
		die('No se ha podido hacer la reserva: ' . mysql_error());
	
	}
	
	//se devuelve el codigo de reserva para que se lea en pantalla
	else
	{
		//seleccionamos el id max de reserva 
		$consulta = mysql_query("SELECT MAX(id) FROM reservas");  
		//Se guarda en un array  
		$r = mysql_fetch_array($consulta);
	
		echo "Su reserva se ha realizado correctamente. <br>Su código de reserva es:$r[0]\n";  
		
		//enviamos el correo con un cliente smtp (Postcard server)
		ini_set("SMTP","roberto-pc");
		ini_set("smtp_port",25);
	
		//rellenamos el contenido del mensaje
		$mensaje="Su código de reserva es:$r[0]";
		$header = "MIME-Version: 1.0\r\n";
		$header .= "Content-type: text/html; charset=UTF-8\r\n";
		$header .= "From:"."@yourdomain"."\r\n";
		
		
		if(mail("$_POST[correo]", "Reserva", "$mensaje",$header,""))
		{
			echo "<br> Se ha enviado un mensaje a su cuenta de correo de confirmación.";
		}
		
		else
		{
			echo "<br> Error no se a podido realizar el envio";
		}
			
	}
?>
</p>
  <div class="empuje"></div>
 </div>
   
<?php
	include('pie.php');

?>
