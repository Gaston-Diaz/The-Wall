<html>
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
<!------------------------------------------------------------------------     head       ------------------------------------------------------------>
<head>
	<link href="style2.css" rel="stylesheet" type="text/css">
	<title>The Wall</title>
	<link rel="shortcut icon" href="imagen\logo.ico" /> 
 	<script type="text/javascript" src="JS\validacionR.js"></script>
 </head>
<!------------------------------------------------------------------------    body -------------------------------------------------------------------->
<body> <!--para cambiar el fondo modifica aca-->
<header>
	<div align="center">
		<h1 class="color-titulo"> The Wall: la nueva red social </h1>
		</tr>
	</div>
</header>
	<div class="test2">  
		<h3> Bienvenido a the Wall</h3>
		</br> 
		<h4>Ingresa los datos para continuar</h4>
	</div>
	<div class="test"> 
	<table class="borde-color color-sesion" > <!--aca se modifica la tabla de inicio de sesion-->
		<form action="Index.php" method="POST" onsubmit= "return validarRegistro()">
			<tr>
				<td><h2> Registro </h2></td>
			</tr>
			<tr>
				<td><p>Email:</p></td>
				<td><input type="email" id="Email" name="Email"  placeholder="Ingresa Email"  ></p></td>
			</tr>
			<tr>
				<td><p>Nombre:</p></td>
				<td><input type="text" id="Nombre" name="Nombre"  placeholder="Ingresa Nombre" ></p></td>
			</tr>
			<tr>
				<td><p>Apellido: </p></td>
				<td><input type="text" id="Apellido" name="Apellido"  placeholder="Ingresa Apellido" ></p></td>
			</tr>
			<tr>
				<td><p>Nombre Usuario:</p></td>
				<td><input type="text" id="NUsuario" name="NUsuario"  placeholder="Ingresa Nombre de Usuario" ></p></td>
			</tr>
			<tr>
				<td><p>Contrase&ntilde;a:</p></td>
				<td><input type="password" id="Contraseña" name="Contraseña"  placeholder="Ingresa Contrase&ntilde;a" ></p></td>
			</tr>
			<tr>
				<td><p>Repita Contrase&ntilde;a:</p></td>
				<td><input type="password" id="ContraseñaR" name="ContraseñaR"  placeholder="Repita Contrase&ntilde;a" ></p></td>
			</tr>
			<tr>
				<td><p>Foto: </p></td>
				<td> <input type="file" id="Foto" name= "Foto" placeholder="Foto de Perfil"> </td>
			</tr>
			<tr>
				<td><p></p></td> <!-- arreglar para centrar el boton ---->
				<td><input type="submit" value="registrar" class="boton-personalizado"></td>
			</tr>
		</form>
	</table>
<footer class="test3">
		<p>Pagina hecha por Diego Diaz y Angel Cari</p>
</footer>
	</div>

</body>
<!----------------------------------------------------------------------- fin body ---------------------------------------------------------------------->
</html>