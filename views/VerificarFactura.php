<?php
include '../models/Factura.php';
include '../controllers/DataBaseController.php';
include '../controllers/FacturaController.php';

use App\controllers\FacturaController;
use App\models\Factura;

$controller = new FacturaController;
$factura = new Factura();

$factura->set('valorFactura', $_POST['valorFactura']);
$result = $controller->crear($factura);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Factura</title>
</head>

<body>
    <h1><?php echo $result ? 'Factura creada' : 'No se pudo crear la factura'; ?></h1>
    <br>
    <a href="">Ver Factura</a>
    <a href="inicio.php">Inicio</a>

</body>

</html>