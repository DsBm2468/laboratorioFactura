<!--?php
  session_start();
  if(empty($_SESSION['iniciarSesion'])){
      header('Location: ../index.php');
    }
?>-->
<?php
require '../models/Usuario.php';
include '../controllers/UsuarioController.php';

use app\controllers\UsuarioController;

$controller = new UsuarioController();
$controller->validarSesion();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <h1>Home</h1> 
    <?php
    echo $_SESSION['iniciarSesion'];
    ?>
    <a href="cerrarSesion.php">Cerrar sesión</a>
</body>
</html>