<?php
include '../models/Model.php';
include '../models/cliente.php';
include '../controllers/DataBaseController.php';
include '../controllers/ClienteController.php';

use App\controllers\ClienteController;

$controller = new ClienteController();
$clientes = $controller->read();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Global.css">
    <title>Clientes</title>
</head>
<body>
<header class="header">
        <nav class="nav">
            <a href="clientes.php" class="logo nav-link">Clientes</a>
            <ul class="nav-menu">
             <li class="nav-menu-item"><a href="inicio2.php" class="nav-menu-link nav-link">Inicio</a>
             </li>
             <li class="nav-menu-item"><a href="#" class="nav-menu-link nav-link">Productos</a>
             </li>
             <li class="nav-menu-item"><a href="#" class="nav-menu-link nav-link">Facturas</a>
             </li>
             <li class="nav-menu-item"><a href="cerrarSesion.php" class="nav-menu-link nav-link">Cerrar Sesión</a>
             </li>
            </ul>
        </nav>
</header>
<div class="contenido">
     <div class="articulos">
            <div>
                <h1 class="texto1">Lista de Clientes</h1>
                <table>
                    <thead>
                        <tr>
                            <th>Nombre Completo</th>
                            <th>Tipo de Documento</th>
                            <th>Numero De Documento</th>
                            <th>Email</th>
                            <th>telefono</th>
                            <th>Editar</th>
                        </tr>
                    </thead>
                </table>
            </div>
      </div>
      <div class="menu-secundario">
           <a href="formulariocliente.php" class="nav-link1">Agregar cliente</a>
           <a href="" class="nav-link1">Lista de productos</a>
           <a href="" class="nav-link1">Generar Factura</a>
      </div>
  <div>

</body>
</html>