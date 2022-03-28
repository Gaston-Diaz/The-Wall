<!DOCTYPE html>
<html>
<head>
	<title> The Wall</title>
	<link rel="shortcut icon" href="imagen\logo.ico" />
	<link rel="stylesheet" href="style2.css">
	<script type="text/javascript" src="JS\validacionPI.js"></script>
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

	<div class="amigo" >           
		<img src="imagen/diego.jpg" class="imagenes">      
		<h2>Perfil</h2>
		<form action="Perfil.php" method="POST" name="miformulario" onsubmit="return validarPosteoI()">
			<p>Nombre: Diego</p>			
			<p>Apellido: Diaz</p>
			<p>Usuario: Defa_lt</p>			
			<input type="button" value="modificar datos" onclick="location.href='ModificarDatos.php'" class="boton-personalizado">
			<button type="button" class="boton-personalizado" onclick="location.href='lista_amigos.php'">amigos</button>
<!--		<textarea wrap="0ff" cols="30" rows="5" placeholder="¿Que estas pensando?" maxlength="140"></textarea>-->
			<input type=textarea id=Post name=areatexto  placeholder="¿Que estas pensando?" class="estilotextarea2">
		</br>
			<input type="submit" value="enviar" class="boton-personalizado">
			<input type="button" value="subir foto" class="boton-personalizado">
		</form>
	</div>

	<div class="dialogo">   
		
		<div class="logo">      
			<div class="chat">	
				<div class="nombre_usuario">
						<p> Gaston Diaz</p>			
				</div>	
				<div class="fecha_usuario">
						<p>Hoy 22:30<p/>
				</div>
				<div class="foto">
					<img src="imagen/diego.jpg" id="user-image">
				</div> 
					<p class="conversar">CSS  es un lenguaje de diseño gráfico para definir y crear un documento </p>
				<div class="botonera_like">
					<input type="submit" value="like" class="boton-megusta">
				</div>
				<div class="botonera_dislike">
					<input type="submit" value="dislike" class="boton-nomegusta">
				</div>
				<div class="botonera_eliminar">
					<input type="submit" value="Eliminar" class="boton-Eliminar">
				</div>
			</div>
		</div>

		<div class="logo">      
			<div class="chat">	
				<div class="nombre_usuario">
						<p> Gaston Diaz</p>			
				</div>	
				<div class="fecha_usuario">
						<p>Hoy 22:45<p/>
				</div>
				<div class="foto">
					<img src="imagen/diego.jpg" id="user-image">
				</div> 
					<p class="conversar">Prueba imagen </br> <img src="imagen/Diego.jpg" width="300" height="250"></p>
				<div class="botonera_like">
					<input type="submit" value="like" class="boton-megusta">
				</div>
				<div class="botonera_dislike">
					<input type="submit" value="dislike" class="boton-nomegusta">
				</div>
				<div class="botonera_eliminar">
					<input type="submit" value="Eliminar" class="boton-Eliminar">
				</div>
			</div>
		</div>

		<div class="logo">      
			<div class="chat">	
				<div class="nombre_usuario">
						<p> Gaston Diaz</p>			
				</div>	
				<div class="fecha_usuario">
						<p>Hoy 23:00<p/>
				</div>
				<div class="foto">
					<img src="imagen/diego.jpg" id="user-image">
				</div> 
					<p class="conversar">Este texto esta hecho para que pienses que significa algo </p>
				<div class="botonera_like">
					<input type="submit" value="like" class="boton-megusta">
				</div>
				<div class="botonera_dislike">
					<input type="submit" value="dislike" class="boton-nomegusta">
				</div>
				<div class="botonera_eliminar">
					<input type="submit" value="Eliminar" class="boton-Eliminar">
				</div>
			</div>
		</div>
	</div>
	<footer class="P-footer">
			
		<p>Pagina hecha por Diego Diaz y Angel Cari</p>
	
	</footer>
</body>
</html>