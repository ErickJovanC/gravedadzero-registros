function validar(){
	var cajainicial=document.formulario.cajainicial.value,
		venta = document.formulario.venta.value,
		internet = document.formulario.internet.value,
		recargas = document.formulario.recargas.value,
		gastos = document.formulario.gastos.value,
		cajafinal = document.formulario.cajafinal.value,
		entregado = document.formulario.entregado.value,
		diferencia = document.formulario.diferencia.value;
	if(isNaN(cajainicial)){
		alert("El valor ingresado en CAJA INICIAL es incorrecto");
		document.formulario.cajainicial.focus();
		return 0;
	}
	if(isNaN(venta)){
		alert("El valor ingresado en VENTA es incorrecto");
		document.formulario.venta.focus();
		return 0;
	}
	if(isNaN(internet)){
		alert("El valor ingresado en INTERNET es incorrecto");
		document.formulario.internet.focus();
		return 0;
	}
	if(isNaN(recargas)){
		alert("El valor ingresado en RECARGAS es incorrecto");
		document.formulario.recargas.focus();
		return 0;
	}
	if(isNaN(gastos)){
		alert("El valor ingresado en GASTOS es incorrecto");
		document.formulario.gastos.focus();
		return 0;
	}
	if(isNaN(cajafinal)){
		alert("El valor ingresado en CAJA FINAL es incorrecto");
		document.formulario.cajafinal.focus();
		return 0;
	}
	if(isNaN(entregado)){
		alert("El valor ingresado en ENTREGADO es incorrecto");
		document.formulario.entregado.focus();
		return 0;
	}
	if(isNaN(diferencia)){
		alert("El valor ingresado en DIFERENCIA es incorrecto");
		document.formulario.diferencia.focus();
		return 0;
	}
	document.formulario.submit();
}