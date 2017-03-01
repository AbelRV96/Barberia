<?php session_start();

if (isset($_SESSION['usuario'])) {
  header('Location: views/CitaActiva.php ');
}else{
  header('Location: contenido.php ');
}

 ?>
