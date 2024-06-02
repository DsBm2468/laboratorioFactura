<?php
require '../models/Factura.php';
require '../controllers/ClienteController.php';
include '../models/Model.php';
//include '../controllers/ClienteController.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar Factura</title>
</head>
<body>
    <h1>Crear nueva factura</h1>
    <section>
       <label>Seleccione al cliente: </label>
       <input>
        <label>Valor total productos: </label>
        <input name="totalProduct" type="money_format" id="totalProduct">
        <button href="facturaFinal.php">Mostrar factura</button>
    </section>
</body>
</html>