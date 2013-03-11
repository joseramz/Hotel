  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language='javascript' src="js/validarConsulta.js"></script>

<title>Consultas</title>
<?php
  include ('cabecera.php');

?>
</head>

<body>

<!--Se genera la consulta, se valida en validar.js y se está correcto se lleva a enviarConsulta-->
<div id="contenedor">
  <p>
<form action= "enviarConsulta.php" method="post"  name="Hoja de Consultas" onSubmit="return validar(this)">
	<label>ID de reserva:</label>
    <input type="text" name="idReserva" id="idReserva" />
   	<label>Correo electrónico:</label>
    <input type="text" name="correo" id="correo" />
    <input type="submit" name="enviar" value="ENVIAR" />
</form>
</p>
  <div class="empuje"></div>
 </div>
   
    <?php
     include('pie.php');
	?>
    
        
</body>

</html>
