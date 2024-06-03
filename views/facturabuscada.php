<?php
include '../models/Model.php';
include '../models/cliente.php';
include '../controllers/DataBaseController.php';
include '../controllers/ClienteController.php';
include '../controllers/FacturaController.php';
include '../models/Factura.php';

use App\controllers\ClienteController;
use App\models\Cliente;
use App\controllers\FacturaController;

$controller = new ClienteController();
$cliente = new Cliente();

$cliente->set('numeroDocumento', $_POST['numeroDocumento']);

$id = $controller->idCliente($cliente->get('numeroDocumento'));

if ($id) {
    $mensajeid = '';
}
$clientes = $controller->mostrarFactuCliente();

$controller = new FacturaController();
$factura = $controller->mostrarFacturasCliente();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Global.css">
    <title>Facturas Generadas</title>
</head>

<body>
    <header class="header">
        <nav class="nav">
            <a href="CrearFactura.php" class="logo nav-link">Crear Factura</a>
            <ul class="nav-menu">
                <li class="nav-menu-item"><a href="inicio.php" class="nav-menu-link nav-link">Inicio</a>
                </li>
                <li class="nav-menu-item"><a href="clientes.php" class="nav-menu-link nav-link">Clientes</a>
                </li>
                <li class="nav-menu-item"><a href="cerrarSesion.php" class="nav-menu-link nav-link">Cerrar Sesión</a>
                </li>
            </ul>
        </nav>
    </header>
    <div>
        <h2>Cliente</h2>
        <?php if (!empty($clientes)) : ?>
            <?php foreach ($clientes as $item) : ?>
                <div>
                    <p>Tipo de Documento : <?php echo $item->get('tipoDocumento'); ?></p>
                    <p>Número de Documento : <?php echo $item->get('numeroDocumento'); ?></p>
                    <p>Nombre Completo : <?php echo $item->get('nombreCompleto'); ?></p>
                    <p>Email : <?php echo $item->get('email'); ?></p>
                    <p>Teléfono : <?php echo $item->get('telefono'); ?></p>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p>No hay clientes registrados</p>
        <?php endif ?>
    </div>

    <div>
        <h2>Facturas</h2>
        <?php if (!empty($factura)) : ?>
            <?php foreach ($factura as $item) : ?>
                <div>
                    <p>$referencia : <?php echo $item->get('refencia'); ?></p>
                    <p>Fecha : <?php echo $item->get('fecha'); ?></p>
                    <p>Id Cliente : <?php echo $item->get('idCliente'); ?></p>
                    <p>Descuento : <?php echo $item->get('descuento'); ?>%</p>
                    <p>Total Factura : <?php echo  number_format($item->get('valorFactura')); ?></p>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p>No hay clientes registrados</p>
        <?php endif ?>
    </div>
    <a href="inicio.php" class="nav-link1">Volver</a>


</body>

</html>