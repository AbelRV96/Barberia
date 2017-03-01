<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,
    maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <link rel="stylesheet" type="text/css" href="../css/estilos_inicioSesion.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">

	<title>Iniciar sesion</title>
</head>
<body>
<header id="header">
	<nav class="menu">
		<div class="logo">
			<a href="../contenido.php"><img src="../img/logo.png"></a>
			<a href="#" class="btn_menu" id="btn-menu"><i class="icono fa fa-bars" aria-hidden="true"></i></a>
		</div>
		<div class="enlaces" id="enlaces">
			<ul class="lista">
				<li><a href="" class="hover">Nosotros</a></li>
				<li ><a href="" >Citas</a></li>
				<li><a href="" class="hover">Servicios</a></li>
				<li><a href="" class="hover">Galeria</a></li>
				<li><a href="" class="hover">Contacto</a></li>
				<li class="Iniciar" id="Iniciar"><a href="../views/iniciar_sesion.php" class="hover">Iniciar Sesión</a></li>
			</ul>
		</div>
	</nav>
</header>

<form action="" method="post">
    <h2>Ingresar a mi cuenta</h2>
         <input type="text" placeholder="usuario" name="usuario" class="input_text">
		 <input type="password" placeholder="contraseña" name="contrasena" class="input_text">
		 <input type="submit" value="Ingresar" name="enviar">
<p class="olvidar">¿Aun no tienes cuenta? <a href="../views/registrarUsuario.php">Registrate</a></p>
</form>

<script src="../js/jquery.min.js"></script>
<script src="../js/headroom.min.js"></script>
<script src="../js/menu.js"></script>

</body>
</html>
