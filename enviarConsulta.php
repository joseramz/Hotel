<head>
<?php
  
	include('cabecera.php');
?>
<script language='javascript' src="js/validar.js"></script>
</head>
<body>
    <div id="contenedor">

<?php
//Se hace conexion a la BBDD	
	include ("BBDD\conexion.php");	
		
	
	$conexion=mysql_connect($host,$usuario,$password) or die("problema al conectar al host");
	
	mysql_select_db($basedatos,$conexion) or die ("problemas al conectar a la base de datos");
	
//Se comprueba que el id y el correo coinciden
	$resultado= mysql_query("SELECT * FROM reservas WHERE id='$_POST[idReserva]' AND correo = '$_POST[correo]'");

//si no devuelve nada	
	if (mysql_num_rows($resultado) == 0) 
	{
		die('No se ha encontrado ID de reserva o correo electrónico incorrecto' . mysql_error());
	
	}
	
//si no devuelve un formulario con los datos devueltos y que se puedan modificar 
	
	else
	{	
		$fila=mysql_fetch_array($resultado);
		$id = $fila['id'];
		$nombre = $fila['nombre'];
		$apellido = $fila['apellido'];
		$correo = $fila['correo'];
		$telefono = $fila['telefono'];
		
	
		mysql_close($conexion);
		
		?>
        
<!--Formulario de consulta y modificacion-->
        
        <form id="form1" name="form1" action="modificar.php" method="post" onSubmit="return validar(this)">
          <p>
            <input type="hidden" name="id" value="<?php echo "$id";?>" />
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="<?php echo "$nombre";?>" />
            
          </p>
          <p>
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" value="<?php echo "$apellido";?>" />
	      </p>
		<p><span id="sprytextfield1">
        <label for="correo">Correo:</label>
        <input type="text" name="correo" id="correo" value="<?php echo "$correo";?>" />
     </span></p>
      <p>
        <input type="submit" name="submit" id="guardar" value="Guardar modificación"  />
        <input type="submit" name="submit"id="salir"   value="Salir sin guardar" />
        <input type="submit" name="submit" id="cancelar" value="Cancelar reserva" />
      </p>
    </form>
 
 
   <div class="empuje"></div>
  </div>

<?php
		
	}
	
	include('pie.php');

?>
  </body>
