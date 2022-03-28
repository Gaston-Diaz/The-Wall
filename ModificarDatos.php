<html>
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
<!------------------------------------------------------------------------     head       ------------------------------------------------------------>
<head>
	<link href="style2.css" rel="stylesheet" type="text/css">
	<title>The Wall</title>
	<link rel="shortcut icon" href="imagen\logo.ico" /> 
 	<script type="text/javascript" src="JS\validacionDM.js"></script>
 </head>
<body>

	<header>
	<div class="A-titulo">
		<h1 class="color-titulo">The Wall</h1>
	</div>
	</header>

	 <div class="navigation">
		 	<input type="checkbox" name="">
		 	<span></span>
		 	<span></span>
		 	<ul class="menu">
		 		<li><a href="Perfil.php">Mi Perfil</a>
		 		<li><a href="Inicio.php">Inicio</a>
		 		<li><a href="Index.php">Cerrar sesion</a>
			</ul>
	</div>
<div class="test"> 
	<table class="borde-color color-sesion" > <!--aca se modifica la tabla de inicio de sesion-->
		<form action="Perfil.php" method="POST" onsubmit= "return validarModificacionD()">
			<tr>
				<td><h2>Modificar Datos </h2></td>
			</tr>
			<tr>
				<td><p>Email:</p></td>
				<td><input type="test" id="EmailM" name="Email"  placeholder="Ingresa Email"  ></p></td>
			</tr>
			<tr>
				<td><p>Nombre:</p></td>
				<td><input type="text" id="NombreM" name="Nombre"  placeholder="Ingresa Nombre" ></p></td>
			</tr>
			<tr>
				<td><p>Apellido: </p></td>
				<td><input type="text" id="ApellidoM" name="Apellido"  placeholder="Ingresa Apellido" ></p></td>
			</tr>
			<tr>
				<td><p>Nombre Usuario:</p></td>
				<td><input type="text" id="NUsuarioM" name="NUsuario"  placeholder="Ingresa Nombre de Usuario" ></p></td>
			</tr>
			<tr>
				<td><p>Foto: </p></td>
				<td> <input type="file" id="FotoM" name= "Foto" placeholder="Foto de Perfil"> </td>
			</tr>
			<tr>
				<td><p></p></td> <!-- arreglar para centrar el boton ---->
				<td><input type="submit" value="Modificar" class="boton-personalizado"></td>
			</tr>
		</form>
			<tr>
				<td><p></p></td> <!-- arreglar para centrar el boton ---->
				<td><input type="button" value="Modificar Contrase&ntilde;a" onclick="location.href='ModificarClave.php'" class="boton-personalizado"></td>
			</tr>
	</table>	

	<footer class="P-footer2">
			
		<p>Pagina hecha por Diego Diaz y Angel Cari</p>
	
	</footer>
	</div>
</body>
</html>