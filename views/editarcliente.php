<?php

require_once '../controllers/DataBaseActualizacion.php';
require_once '../controllers/ActualizacionCliente.php';

use App\controllers\ClienteControlleer;
use App\controllers\Database;

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Global.css">
    <title>Editar Cliente</title>
</head>

<body>
    <header class="header">
        <nav class="nav">
            <a href="#" class="logo nav-link">Editar Cliente</a>
            <ul class="nav-menu">
                <li class="nav-menu-item"><a href="inicio.php" class="nav-menu-link nav-link">Inicio</a>
                </li>
                <li class="nav-menu-item"><a href="#" class="nav-menu-link nav-link">Facturas</a>
                </li>
                <li class="nav-menu-item"><a href="cerrarSesion.php" class="nav-menu-link nav-link">Cerrar Sesión</a>
                </li>
            </ul>
        </nav>
    </header>
    <h1>Modificar Informacion Del Cliente</h1>

    <?php

    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $cliente_id = $_GET['id'];
    }

    ?>


</body>

</html>