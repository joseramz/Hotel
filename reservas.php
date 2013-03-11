<head>
<script language='javascript' src="js/calendarioForm.js"></script> 
<script language='javascript' src="js/calendar.js"></script>
<script language='javascript' src="js/validar.js"></script>
<link href="css/calendario-form.css" rel="stylesheet" type="text/css">
<?php
  include ('cabecera.php');

?>

</head>

<body>
<!--FORMULARIO DE RESERVA-->
<div id="contenedor">
<p>
<form action="enviar.php" method="post" name="Hoja de Reserva" onSubmit="return validar(this)">
<p></p><span id="campoNombre">
<label for="Nombre">Nombre*:</label>
<input type="text" name="nombre" id="nombre">
</span><br/><p></p>Apellidos*:<span id="campoApellido">
<label for="Apellidos"> </label>
<input type="text" name="apellido" id="apellido">
</span> 
<span id="campoCorreo"><br/><p></p>
Correo*:<input type="text" name="correo" id="correo">
</span><br/>

<p></p><div id="cf-cal">
        <input type="button" class="cf-mov" value="<"
            title = "Un mes atrás"
            onclick="calendarioForm.mueveCalendar(-1)"
        /><input type="text" id="cf-titulo"
            size = "8" maxlength="7"
            onfocus = "calendarioForm.entraFecha(this)"
            onblur = "calendarioForm.mueveMesAnyo(this)"
        /><input type="button" class="cf-mov" value=">"
            title = "Un mes adelante"
            onclick="calendarioForm.mueveCalendar(1)"
        /><input type="button" class="cf-mov" value="OK"
            title = "Aceptar fecha"
            onclick="recogeFechaCalendario()"
        /><input type="button" class="cf-mov" value="X"
            title = "Cerrar"
            onclick="cierraCalendarioForm()" />
        <div id="cf-tabla"></div>
  </div>

<p></p><span id="campoTelefono">
<label for="telefono"></label>
Teléfono*:<input name="telefono" type="text" id="telefono" maxlength="12">
</span><br/><p></p>
Tipo de habitación:<select name="habitacion">
  <option>Individual</option>
  <option>Doble dos camas</option>
  <option>Doble una cama</option>
  <option>Triple</option>
</select>

<p></p>Día de entrada: (pulsar calendario)
  <input type="text" id="input-fecha" name="fecha"  class="cf-span" value="" />
  <input type="button" value="Calendario"
        onclick = "abreCalendarioForm(document.getElementById('input-fecha'))" /></p>
<p></p>Noches:  
<label for="noches"></label>
  <select name="noches" size="1" id="noches">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
  </select>

<input name="enviar" type="submit" value="Solicitar reserva">
</form>
    <div class="empuje"></div>
  </div>
</body>
<?php
	
	include('pie.php');
?>
</html>
