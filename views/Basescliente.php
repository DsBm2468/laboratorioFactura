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

echo '<pre>';
print_r($cliente);
echo '</pre>';

$result = empty($cliente->get('id'))
    ? $controller->create($cliente)
    : $controller->update($cliente);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Cliente</title>
</head>
<body>
    <h1><?php echo $result ? 'Datos guardados' : 'No se pudo guardar el cliente'; ?> </h1>
    <br>
    <a href="clientes.php">Volver</a>
</body>
</html>