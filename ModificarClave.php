<html>
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
<!------------------------------------------------------------------------     head       ------------------------------------------------------------>
<head>
	<link href="style2.css" rel="stylesheet" type="text/css">
	<title>The Wall</title>
	<link rel="shortcut icon" href="imagen\logo.ico" /> 
 	<script type="text/javascript" src="JS\validacionCM.js"></script>
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
		<form action="Perfil.php" method="POST" onsubmit= "return validarModificacionC()">
			<tr>
				<td><h2>Modificar Contrase&ntilde;a </h2></td>
			</tr>
			<tr>
				<td><p>Contrase&ntilde;a vieja:</p></td>
				<td><input type="password" id="ClaveVM" name="ClaveVM"  placeholder="Ingresa Contrase&ntilde;a" ></p></td>
			</tr>
			<tr>
				<td><p>Contrase&ntilde;a nueva:</p></td>
				<td><input type="password" id="ClaveNM" name="ClaveNM"  placeholder="Ingresa Contrase&ntilde;a Nueva" ></p></td>
			</tr>
			<tr>
				<td><p>Repita Contrase&ntilde;a:</p></td>
				<td><input type="password" id="ClaveNR" name="ClaveNR"  placeholder="Repita Contrase&ntilde;a" ></p></td>
			</tr>
			<tr>
				<td><p></p></td> <!-- arreglar para centrar el boton ---->
				<td><input type="submit" value="Modificar" class="boton-personalizado"></td>
			</tr>
		</form>
	</table>	
	<footer class="P-footer2">
			
		<p>Pagina hecha por Diego Diaz y Angel Cari</p>
	
	</footer>
	</div>
</body>
</html>