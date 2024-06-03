<?php
include '../models/Model.php';
include '../models/cliente.php';
include '../controllers/DataBaseController.php';
include '../controllers/ClienteController.php';
include '../controllers/FacturaController.php';
include '../models/Factura.php';

use App\controllers\ClienteController;
use App\controllers\FacturaController;


$controller = new ClienteController();
$clientes = $controller->mostrarFactuCliente();

$controller = new FacturaController;
$factura = $controller->mostrarDatosFactu();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Global.css">
    <title>Facturas</title>
</head>

<body>
    <header class="header">
        <nav class="nav">
            <a href="#" class="logo nav-link">Facturas Generadas</a>
            <ul class="nav-menu">
                <li class="nav-menu-item"><a href="inicio.php" class="nav-menu-link nav-link">Inicio</a>
                </li>
                <li class="nav-menu-item"><a href="formulariocliente.php" class="nav-menu-link nav-link">Nueva Compra</a>
                </li>
                <li class="nav-menu-item"><a href="clientes.php" class="nav-menu-link nav-link">Clientes</a>
                </li>
                <li class="nav-menu-item"><a href="cerrarSesion.php" class="nav-menu-link nav-link">Cerrar Sesión</a>
                </li>
            </ul>
        </nav>
    </header>
    <section class="factura-conteiner">
        <h4>Datos del Cliente</h4>
        <hr>
        <?php if (!empty($clientes)) : ?>
            <?php foreach ($clientes as $item) : ?>
                <div class="parrafo">
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
    </section>

    <section class="factura-conteiner">
        <h4>Facturas</h4>
        <hr>
        <?php if (!empty($factura)) : ?>
            <?php foreach ($factura as $item) : ?>
                <div class="parrafo">
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
    </section>
</body>

</html>