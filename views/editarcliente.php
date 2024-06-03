<?php
include '../models/Model.php';
include '../models/cliente.php';
include '../controllers/DataBaseController.php';
include '../controllers/ClienteController.php';


use App\controllers\DataBaseController;

$dataBase = new DataBaseController();

$id = $_GET['id'];
$query = "SELECT * FROM clientes WHERE id = $id";
$result = $dataBase->execSql($query);
$record = $result->fetch_assoc();
echo "ID recibido del formulario: " . $_GET['id'];
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
                <li class="nav-menu-item"><a href="formulariocliente.php" class="nav-menu-link nav-link">Nueva Compra</a>
                </li>
                <li class="nav-menu-item"><a href="buscarfactura.php" class="nav-menu-link nav-link">Facturas</a>
                </li>
                <li class="nav-menu-item"><a href="cerrarSesion.php" class="nav-menu-link nav-link">Cerrar Sesión</a>
                </li>
            </ul>
        </nav>
    </header>
    <section class="form-cliente">
        <form action="modificacioncliente.php" method="post" class="form">
            <h4>Modificar Informacion Del Cliente</h4>
            <input type="hidden" name="id" value="<?php echo $record[$id]; ?>">
            <select class="controls" id="tipoDocumento" name="tipoDocumento" required>
                <option value="">Seleccione</option>
                <option value="CC" <?php echo $record['tipoDocumento'] == 'CC' ? 'selected' : ''; ?>>Cedula</option>
                <option value="CE" <?php echo $record['tipoDocumento'] == 'CE' ? 'selected' : ''; ?>>Cedula de extranjeria</option>
                <option value="NIT" <?php echo $record['tipoDocumento'] == 'NIT' ? 'selected' : ''; ?>>Número de Identificación Tributaria</option>
                <option value="TI" <?php echo $record['tipoDocumento'] == 'TI' ? 'selected' : ''; ?>>Tarjeta de Identidad</option>
                <option value="Otro" <?php echo $record['tipoDocumento'] == 'Otro' ? 'selected' : ''; ?>>Otro</option>
            </select>
            <div>
                <input type="nombre" id="nombreCompleto" name="nombreCompleto" value="<?php echo $record['nombreCompleto']; ?>" placeholder="Nombres Y Apellidos" class="controls" required>
            </div>

            <div>
                <input type="number" id="numeroDocumento" name="numeroDocumento" value="<?php echo $record['numeroDocumento']; ?>" placeholder="# Documento" class="controls" required>
            </div>

            <div>
                <input type="email" id="email" name="email" value="<?php echo $record['email']; ?>" placeholder="Email" class="controls" required>
            </div>

            <div>
                <input type="telefono" id="telefono" name="telefono" value="<?php echo $record['telefono']; ?>" placeholder="Telefono" class="controls" required>
            </div>
            <input type="submit" class="botons" value="Actualizar Cliente">
            </p>
        </form>
    </section>
    <br>
    <a href="clientes.php" class="nav-link1">Volver</a>
</body>

</html>