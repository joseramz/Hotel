// JavaScript Document
function validar(formulario)
{
  var formulario = formulario;
	
	if(formulario.nombre.value.length < 3)
	{
		alert("Escriba por lo menos 3 caracteres en el campo Nombre");
		formulario.nombre.focus();
		
		return false;	
		
	}
	
	
  var abcdario = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZÁÉÍÓÚÄÏÖËÜ " + "abcdefghijklmnñopqrstuvwxyzáéúíóäëïöü";
  
  var campoNombre = formulario.nombre.value;
  var campoApellido = formulario.apellido.value;
  
  var todoOk = true;
  
  for(var i=0; i<campoNombre.length; i++)
  {
	var caracter = campoNombre.charAt(i);  
	 
	 for(var j=1; j<=abcdario.length; j++)
	 {
		if(caracter == abcdario.charAt(j))
		{
			break;	
		}
		
		if(j == abcdario.length)
	 	{
			todoOk = false;
			break;
		}
	
 	 }
  
	 
	 if(!todoOk)
	 {
		alert("Escriba letras en el campo nombre");
		formulario.nombre.focus();	 
		
		return false;
		 
	 }
	 
  }
  //Comprueba la longitud del apellido
	if(formulario.apellido.value.length < 3)
	{
		alert("Escriba por lo menos 3 caracteres en el campo Apellido");
		formulario.nombre.focus();
		
		return false;	
		
	}
	
  
  for(var i=0; i<campoApellido.length; i++)
  {
	var caracter = campoApellido.charAt(i);  
	 
	 for(var j=1; j<=abcdario.length; j++)
	 {
		if(caracter == abcdario.charAt(j))
		{
			break;	
		}
		
		if(j == abcdario.length)
	 	{
			todoOk = false;
			break;
		}
	
  	}
	
	 if(!todoOk)
	 {
		alert("Escriba letras en el campo apellido");
		formulario.apellido.focus();	 
		
		return false;
		 
	 }
  }
  
  //comprueba que el email este correcto
	
	if(formulario.correo.value.indexOf('@',0) == -1 || formulario.correo.value.length < 3 )
	{
		alert("Escriba una dirección de correo correcta, por favor");
		formulario.correo.focus();
		return(false);
		
	}
	
//validacion de telefono	
  if(formulario.telefono.value <= 9)
  { 
  	alert("Por favor añada un número de teléfono válido");
	formulario.telefono.focus();
	return false;
  }
  

////validacion de fecha
  
  if(!formulario.fecha.value )
  { 
  	alert("Por favor seleccione una fecha");
	formulario.fecha.focus();
	return false;
  }

////validacion de id
  if(!formulario.idReserva.value )
  { 
  	alert("Por favor es obligatorio escribir el ID de reserva");
	formulario.iReserva.focus();
	return false;
  }
	
	
	return(true);
	
}
