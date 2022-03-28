<!DOCTYPE html>
<html>
<head>
	<title> The Wall</title>
	<link rel="shortcut icon" href="imagen\logo.ico" />
	<link rel="stylesheet" href="style2.css">
</head>

<body>
	<!-- TITULO -->
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

	<div class="amigo">           
		<img src="imagen/angel.jpg" class="imagenes">      
		<h2>Perfil</h2>
		<form>
			<p>Nombre: Angel</p>			
			<p>Apellido: Cari</p>
			<p>Usuario: angelito</p>			
			<input type="submit" value="Seguir" class="boton-seguir">	
			<input type="submit" value="Dejar de Seguir" class="boton-dejarSeguir">
		</form>
	</div>
	<div class="dialogo">   <!---chatbox--->

		<div class="logo">		  <!---chatlogs--->	      
			<div class="chat">	
				<div class="nombre_usuario">
						<p> Angelito</p>			
				</div>	
				<div class="fecha_usuario">
						<p>Hoy 22:10<p/>
				</div>
				<div class="foto">
					<img src="imagen/Angel.jpg" id="user-image">
				</div> 
					<p class="conversar">CSS  es un lenguaje de diseño gráfico para definir y crear un documento </p>
				<div class="botonera_like">
					<input type="submit" value="like" class="boton-megusta">
				</div>
				<div class="botonera_dislike">
					<input type="submit" value="dislike" class="boton-nomegusta">
				</div>
			</div>
		</div>

		<div class="logo">      
			<div class="chat">	
				<div class="nombre_usuario">
						<p> Angelito</p>			
				</div>	
				<div class="fecha_usuario">
						<p>Hoy 22:27<p/>
				</div>
				<div class="foto">
					<img src="imagen/Angel.jpg" id="user-image">
				</div> 
					<p class="conversar">Sigo escribiendo para ver si se centra</p>
				<div class="botonera_like">
					<input type="submit" value="like" class="boton-megusta">
				</div>
				<div class="botonera_dislike">
					<input type="submit" value="dislike" class="boton-nomegusta">
				</div>
			</div>
		</div>

		<div class="logo">
			<div class="chat">			    <!-- chat_friends ---->
				<div class="nombre_usuario">
						<p> Angelito</p>			
				</div>	
				<div class="fecha_usuario">
						<p>Hoy 22:40<p/>
				</div>
				<div class="foto">
					<img src="imagen/Angel.jpg" id="user-image">
				</div> 
					<p class="conversar"> Ejemplo de una foto<img src="imagen/Angel.jpg" width="300" height="250"></p>
				<div class="botonera_like">
					<input type="submit" value="like" class="boton-megusta">
				</div>
				<div class="botonera_dislike">
					<input type="submit" value="dislike" class="boton-nomegusta">
				</div>
			</div>
		</div>
		
	</div>
	<footer class="P-footer">
			
		<p>Pagina hecha por Diego Diaz y Angel Cari</p>
	
	</footer>
</body>
</html>