<?php
include '../models/Model.php';
include '../models/cliente.php';
include '../controllers/DataBaseController.php';
include '../controllers/ClienteController.php';

use App\controllers\ClienteController;
use App\models\Cliente;

$controller = new ClienteController();

$cliente = new Cliente();
$cliente->set('id', $_POST['id'] ?? null);
$cliente->set('nombreCompleto', $_POST['nombreCompleto']);
$cliente->set('tipoDocumento', $_POST['tipoDocumento']);
$cliente->set('numeroDocumento', $_POST['numeroDocumento']);
$cliente->set('email', $_POST['email']);
$cliente->set('telefono', $_POST['telefono']);

$clienteExistente = $controller->clienteExistente($cliente->get('numeroDocumento'));

$result =  empty($cliente->get('id'))
    ? $controller->update($cliente)
    : $controller->create($cliente);
$mensaje = $result ? 'Datos actualizados' : 'No se pudo actualizar el cliente';

$id = $controller->idCliente($cliente->get('numeroDocumento'));
if ($id) {
    $mensajeid = '';
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Cliente</title>
</head>

<body>
    <h1><?php echo $mensaje; ?></h1>
    <br>
    <a href="clientes.php" class="nav-link1">Volver</a>
    <br>
    <a href="inicio.php">Inicio</a>
</body>

</html>