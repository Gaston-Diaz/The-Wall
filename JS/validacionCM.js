function validarModificacionC(){
	var claveV, claveN, claveNR, minusculas, mayusculas, caracteresE;
	claveV = document.getElementById("ClaveVM").value;
	claveN = document.getElementById("ClaveNM").value;
	claveNR = document.getElementById("ClaveNR").value;
	minusculas =/[a-z]+/;// controla que las contraseñas tengan minusculas
	mayusculas =/[A-Z]+/;// controla que las contraseñas tengan mayusculas
	caracteresE=/[`~!@#$%^&*()_°¬|+\-=?;:'",.<>\{\}\[\]\\\/1234567890]/;// controla que las contraseñas tengan caracteres o numeros
	
	// comprueba que los campos no sean vacios
	if( claveV === "" && claveN === "" && claveNR === "" ){
		alert("No ha realizado ningun cambio");
		return true;
	}
	else if( claveV === "" || claveN === "" || claveNR === "" ){
		alert("Debe completar los campos para poder cambiar la contraseña");
		return false;
	}
	//comprueba que la contraseña tenga mas de 6 caracteres
	else if(claveV.length < 6){
		alert("La contraseña antigua debe superar los 6 caracteres");
		return false;
	}
	//comprueba que la contraseña tenga al menos una letra minuscula
	else if(!minusculas.test(claveV)){
		alert("La contraseña antigua debe tener al menos una letra minuscula");
		return false;
	}
	//comprueba que la contraseña tenga al menos una letra mayuscula
	else if(!mayusculas.test(claveV)){
		alert("La contraseña antigua debe tener al menos una letra mayuscula");
		return false;
	}
	// Comprueba que la contraseña tenga al menos un caracter especial o numero
	else if(!caracteresE.test(claveV)){
		alert("La contraseña antigua debe tener al menos un caracter o numero");
		return false;
	}
	// comprueba que las contraseñas antigua y nueva no sean iguales
	else if(claveV === claveN){
		alert("La Contraseña nueva no puede ser igual a la antigua");
		return false;
	}
		//comprueba que la contraseña tenga mas de 6 caracteres
	else if(claveN.length < 6){
		alert("La contraseña nueva debe superar los 6 caracteres");
		return false;
	}
	//comprueba que la contraseña tenga al menos una letra minuscula
	else if(!minusculas.test(claveN)){
		alert("La contraseña nueva debe tener al menos una letra minuscula");
		return false;
	}
	//comprueba que la contraseña tenga al menos una letra mayuscula
	else if(!mayusculas.test(claveN)){
		alert("La contraseña nueva debe tener al menos una letra mayuscula");
		return false;
	}
	// Comprueba que la contraseña tenga al menos un caracter especial o numero
	else if(!caracteresE.test(claveN)){
		alert("La contraseña nueva debe tener al menos un caracter o numero");
		return false;
	}
	else if(claveN != claveNR){
		alert("Debe repetir correctamente la nueva contraseña");
		return false;
	}
	else if( claveV != "" && claveN != "" && claveNR != "" ){
		alert("Cambios realizados");
		return true;
	}
}