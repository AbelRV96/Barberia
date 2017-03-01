<!DOCTYPE html>
<html lang="en">
<head>
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,
    maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <link rel="stylesheet" type="text/css" href="../css/estilos_Registrar.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
	<title>Registrar usuario</title>
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
  				<li><a href="" >Citas</a></li>
  				<li><a href="" class="hover">Servicios</a></li>
  				<li><a href="" class="hover">Galeria</a></li>
  				<li><a href="" class="hover">Contacto</a></li>
  				<li class="Iniciar" id="Iniciar"><a href="../views/iniciar_sesion.php" class="hover">Iniciar Sesión</a></li>
  			</ul>
  		</div>
  	</nav>
  </header>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form_register">
   <h2 class="form_titulo">Registrate</h2>
    <div class="contenedor_inputs">
        <input type="text" id="nombre" name="nombre" placeholder="Nombre" class="input_100" >
        <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos" class="input_100">
        <input type="email" id="email" name="email" placeholder="Correo electronico" class="input_100" >
        <input type="text" id="usuario" name="usuario" placeholder="Usuario" class="input_100">
        <input type="text" id="telefono" name="telefono" placeholder="Teléfono" class="input_100" >
        <input type="password" id="contrasena" name="contrasena" placeholder="contraseña" class="input_100">
        <input type="submit" value="Registrar" class="btn_enviar" id="reset1">
        <p class="olvidar">¿Olvidaste tu contraseña? <a href="#">Obten ayuda</a></p>
    </div>
</form>
<script src="../js/jquery.min.js"></script>
<script src="../js/headroom.min.js"></script>
<script src="../js/menu.js"></script>
</body>
</html>
