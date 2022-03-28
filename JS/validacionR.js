function validarRegistro() {
	var email, nombre, apellido, usuario, contrasenia1, contrasenia2, foto, emailbien, espacios, letras, minusculas, mayusculas, caracteresE;
	email = document.getElementById("Email").value;
	nombre = document.getElementById("Nombre").value;
	apellido = document.getElementById("Apellido").value;
	usuario = document.getElementById("NUsuario").value;
	contrasenia1 = document.getElementById("Contraseña").value;
	contrasenia2 = document.getElementById("ContraseñaR").value;
	foto = document.getElementById("Foto").value;
	emailbien = /\w+@\w+.+[a-z]/; //  se usa para el mail
	espacios= /\s/; // controla que los campos no tengan espacios
	letras= /^[a-zA-Z]+$/;// controla que los campos sean solo letras
	minusculas =/[a-z]+/;// controla que las contraseñas tengan minusculas
	mayusculas =/[A-Z]+/;// controla que las contraseñas tengan mayusculas
	caracteresE=/[`~!@#$%^&*()_°¬|+\-=?;:'",.<>\{\}\[\]\\\/1234567890]/;// controla que las contraseñas tengan caracteres o numeros

	//se fija si todos los campos son vacios
	if( email === "" || nombre === "" || apellido ==="" || usuario === "" || contrasenia1 === "" || contrasenia2 === "" ){
		alert("todos los campos son obligatorios");
		return false;
	}
	//controla que sea un email valido en forma escrita
	else if (!emailbien.test(email)){
		alert ("ingrese un email valido");
		return false;
	}
	//controla que el nombre no tenga espacios en blanco 
	else if (espacios.test(nombre)){
		alert("el nombre no debe tener espacios");
		return false;
	}
	//controla que el nombre solo contenga caracteres alfabeticos
	else if (!letras.test(nombre)){
		alert("el nombre solo debe tener letras");
		return false;
	}
	//controla que el apellido no tenga espacios en blanco 
	else if (espacios.test(apellido)){
		alert("el apellido no debe tener espacios");
		return false;
	}
	//controla que el apellido solo contenga caracteres alfabeticos
	else if(!letras.test(apellido)){
		alert ("el apellido solo debe tener letras");
		return false;
	}
	//controla que el nombre de usuario sea mayor que 6 caracteres
	else if (usuario.length < 6 ){
		alert("el nombre de usuario debe tener al menos 6 caracteres")
		return false;
	}
	//controla que las contraseñas sean iguales
	else if (contrasenia1 != contrasenia2){
		alert("las contrasenias deben ser iguales")
	    return false;
	}
	//controla que las contraseñas tengan mas de 6 caracteres
	else if (contrasenia1.length < 6){
		alert("la contrasenia debe tener mas de 6 caracteres")
		return false;
	}
	//controla que la contraseña tenga al menos 1 minuscula
	else if (!minusculas.test(contrasenia1)){
		alert (" la contraseña debe tener al menos una minuscula")
		return false;
	}
	//controla que la contraseña tenga al menos 1 mayuscula
	else if (!mayusculas.test(contrasenia1)){
		alert ("la contraseña debe tener al menos una mayuscula")
		return false;
	}
	//controla que la contraseña tenga al menos un caracter especial o numero
	else if (!caracteresE.test(contrasenia1)){
		alert ("la contraseña debe tener al menos un numero o caracter")
		return false;
	}
	else if (foto === ""){
		alert ("Debe seleccionar una foto");
		return false;
	}
}
