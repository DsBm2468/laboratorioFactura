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
use App\models\Usuario;

$controller = new UsuarioController();
$usuario = new Usuario();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Global.css">
    <title>Inicio</title>
</head>
<body>
    <header class="header">
        <nav class="nav">
            <a href="#" class="logo nav-link">Inicio</a>
            <ul class="nav-menu">
             <li class="nav-menu-item"><a href="formulariocliente.php" class="nav-menu-link nav-link">Clientes</a>
             </li>
             <li class="nav-menu-item"><a href="#" class="nav-menu-link nav-link">Facturas</a>
             </li>
             <li class="nav-menu-item"><a href="cerrarSesion.php" class="nav-menu-link nav-link">Cerrar Sesión</a>
             </li>
            </ul>
        </nav>
    </header>
            <div>
                <h1 class="texto1">Bienvenido(a) Señor(a) Usuario(a)</h1>
            </div>
            <div class="menu-secundario">
                <a href="clientes.php" class="nav-link1">Lista de Clientes</a>
                <a href="productos.php" class="nav-link1">Generar Factura</a>
            </div>
    <div>
</body>
</html>


<!--<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <h1>Home</h1> 
    <php
    echo $_SESSION['iniciarSesion'];
    ?>
    <a href="cerrarSesion.php">Cerrar sesión</a>
    <a href="crearcliente.php">Crear Cliente</a>
</body>
</html>-->