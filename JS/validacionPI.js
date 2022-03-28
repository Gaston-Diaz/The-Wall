function validarPosteoI(){
	var post;
	post = document.miformulario.areatexto.value.length
	
	if(post == 0){
		alert("debe escribir algo para poder subirlo");
		return false;
	}
	else if(post > 140){
		alert("el post supera la maxima cantidad de caracteres");
		return false;
	}
}