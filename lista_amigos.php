<!DOCTYPE html>
<html>
<head>
	<title> The Wall</title>
	<link rel="shortcut icon" href="imagen\logo.ico" />
	<link rel="stylesheet" href="style2.css">
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
	<div class="contactos">

		<div class="friends" >
			<div class="foto"><img src="imagen/angel.jpg" id="user-image"></div>
			<div class="informacion">
				<div class="name_user">
							<p>Angel Cari</p>	
				</div>
				<div class="comenta">
					<p>Amigos</p>
				</div>	
					<input type="button" value="Ver Perfil" onclick="location.href='PerfilAmigo.php'"class="boton-personalizado">
			</div>
		</div>
		<!--<div class="friends2" >
			<div class="foto"><img src="imagen/diego.jpg" id="user-image"></div>
			<div class="informacion">
				<div class="name_user">
							<p>Gaston Diaz</p>	
				</div>
				<div class="comenta">
					<p>Buen dia a todos </p>
				</div>	
					<input type="button" value="Ver Perfil" onclick="location.href='Perfil.php'" class="boton-personalizado">
			</div>
		</div>-->
		
	</div>
	<footer class="P-footer">
			
		<p>Pagina hecha por Diego Diaz y Angel Cari</p>
	
	</footer>
</body>
</html>