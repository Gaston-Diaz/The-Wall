function validarInicio(){
	var usuarioI, claveI, minuscula, mayuscula, caracteresE;
	usuarioI = document.getElementById("UsuarioI").value;
	claveI = document.getElementById("ClaveI").value;
	minusculas =/[a-z]+/;// controla que las contraseñas tengan minusculas
	mayusculas =/[A-Z]+/;// controla que las contraseñas tengan mayusculas
	caracteresE=/[`~!@#$%^&*()_°¬|+\-=?;:'",.<>\{\}\[\]\\\/1234567890]/;// controla que las contraseñas tengan caracteres o numeros
	if( usuarioI === "" || claveI === "" ){
		alert("Los campos no pueden estar vacios");
		return false;
	}
		//controla que el nombre de usuario sea mayor que 6 caracteres
	else if (usuarioI.length < 6 ){
		alert("el nombre de usuario debe tener al menos 6 caracteres")
		return false;
	}
	//controla que las contraseñas tengan mas de 6 caracteres
	else if (claveI.length < 6){
		alert("la contrasenia debe tener mas de 6 caracteres")
		return false;
	}
	//controla que la contraseña tenga al menos 1 minuscula
	else if (!minusculas.test(claveI)){
		alert (" la contraseña debe tener al menos una minuscula")
		return false;
	}
	//controla que la contraseña tenga al menos 1 mayuscula
	else if (!mayusculas.test(claveI)){
		alert ("la contraseña debe tener al menos una mayuscula")
		return false;
	}
	//controla que la contraseña tenga al menos un caracter especial o numero
	else if (!caracteresE.test(claveI)){
		alert ("la contraseña debe tener al menos un numero o caracter")
		return false;
	}
}