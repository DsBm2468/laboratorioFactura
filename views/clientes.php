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
    <link rel="stylesheet" href="http://localhost/laboratorioFactura/css/Global.css">
    <title>Clientes</title>
</head>

<body>
    <header class="header">
        <nav class="nav">
            <a href="clientes.php" class="logo nav-link">Clientes</a>
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
    <div id="main-container">
        <h1 class="texto1">Lista de Clientes</h1>
        <table>
            <thead>
                <tr>
                    <th>Nombre Completo</th>
                    <th>Tipo de Documento</th>
                    <th>Numero De Documento</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($clientes)) : ?>
                    <?php foreach ($clientes as $item) : ?>
                        <tr>
                            <td><?php echo $item->get('tipoDocumento');  ?></td>
                            <td><?php echo $item->get('numeroDocumento'); ?></td>
                            <td><?php echo $item->get('nombreCompleto'); ?></td>
                            <td><?php echo $item->get('email');          ?></td>
                            <td><?php echo $item->get('telefono');       ?></td>
                            <td>
                                <form action="editarcliente.php?id=<?php echo $item->get('id'); ?>" method="post">

                                    <input type="submit" value="Editar">
                                </form>
                            </td>

                        </tr>

                    <?php endforeach; ?>

                <?php else : ?>
                    <tr>
                        <td>No hay clientes D:</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>

</html>