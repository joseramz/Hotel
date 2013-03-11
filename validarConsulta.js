// JavaScript Document
function validar(formulario)
{
  var formulario = formulario;
	
  if(!formulario.idReserva.value )
  { 
  	alert("Por favor es obligatorio escribir el ID de reserva");
	formulario.idReserva.focus();
	return false;
  }
  
	if(formulario.correo.value.indexOf('@',0) == -1 || formulario.correo.value.length < 3 )
	{
		alert("Escriba una dirección de correo correcta, por favor");
		formulario.correo.focus();
		return(false);
		
	}

	
	
	return(true);
}
