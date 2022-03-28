function validarModificacionD(){
	var emailM, nombreM, apellidoM, usuarioM, emailbien, letras;
	emailM = document.getElementById("EmailM").value;
	nombreM = document.getElementById("NombreM").value;
	apellidoM = document.getElementById("ApellidoM").value;
	usuarioM = document.getElementById("NUsuarioM").value;
	fotoM = document.getElementById("FotoM").value;
	emailbien = /\w+@\w+.+[a-z]/;
	letras= /^[a-zA-Z]+$/;
	//si los campos estan vacios sale sin modificar los datos
	if(emailM === "" && nombreM === "" && apellidoM === "" && usuarioM === "" && fotoM === ""){
		alert("No ha realizado ninguna modificacion");
		return true;
	}
	//controla que el formato del mail sea valido
	else if(emailM != "" && !emailbien.test(emailM)){
		alert("Debe ingresar un email valido");
		return false;	
	}
	// controla que el campo nombre tenga solo caracteres alfabeticos
	else if(nombreM != "" && !letras.test(nombreM)){
		alert("El campo nombre solo puede tener letras");
		return false;
	}
	//controla que el campo apellido tenga solo caracteres alfabeticos
	else if(apellidoM != "" && !letras.test(apellidoM)){
		alert("El campo apellido solo puede tener letras");
		return false;
	}
	else if(usuarioM != "" && usuarioM.length < 6){
		alert("El nombre de usuario debe tener mas de 6 caracteres");
		return false;
	}
	else if(emailM === "" || nombreM === "" || apellidoM === "" || usuarioM === "" || fotoM === ""){
		alert("Cambios realizados");
		return true;
	}
}