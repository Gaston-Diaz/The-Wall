<html>
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
<style>

</style>
<!------------------------------------------------------------------------     head       ------------------------------------------------------------>
<head>
	<link href="style2.css" rel="stylesheet" type="text/css">
	<title>The Wall</title>
	<link rel="shortcut icon" href="imagen\logo.ico" /> 
	<script type="text/javascript" src="JS\validacionI.js"></script>
</head>
<!------------------------------------------------------------------------    body -------------------------------------------------------------------->
<body>
	<header>
	<div align="center">
		<h1 class="color-titulo"> The Wall: la nueva red social </h1>
		</tr>
	</div>
	</header>

	<div class="test2">  
		<h3> Bienvenido a the Wall</h3>
		</tr> 
		<h4>Sigue lo que te interesa</h4>
		<h4>Enterate de lo que esta hablando la gente</h4>
		<h4>unete a la conversacion</h4>
	</div>
	
	<div class="test"> 
	<table class="borde-color color-sesion" > <!--aca se modifica la tabla de inicio de sesion-->
		<form action="Inicio.php" method="POST" onsubmit= "return validarInicio()">
			<tr>
				<td><h2> Inicio sesion </h2></td>
			</tr>
			<tr>
				<td><p>Nombre Usuario:</p></td>
				<td><input type="text" id="UsuarioI" name="UsuarioI"  placeholder="Ingresa Nombre de Usuario" ></td>
			</tr>
			<tr>
				<td><p>Contrase&ntilde;a:</p></td>
				<td><input type="password" id="ClaveI" name="ClaveI"  placeholder="Ingresa Contrase&ntilde;a" ></td>
			</tr>
			</tr>
			<tr>
				<td><p></p></td> <!-- arreglar para centrar el boton ---->
				<td><input type="submit" value="Iniciar Sesion" class="boton-personalizado"></td>
			</tr>
		</form>
		<tr>
			<td><p>&iquest;no tenes una cuenta?. <a href="Registro.php"> Registrate</a> <p></td>
		</tr>
	</table>
	</div>
<footer class="test3">
		<p>Pagina hecha por Diego Diaz y Angel Cari</p>
</footer>
</body>

<!----------------------------------------------------------------------- fin body ---------------------------------------------------------------------->
</html>