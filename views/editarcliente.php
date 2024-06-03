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
            <a href="editarcliente.php" class="logo nav-link">Editar Cliente</a>
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
    <div class="">
        <form action="modificacioncliente.php" method="post">
            <input type="hidden" name="id" value="<?php echo $record[$id]; ?>">
                <div>
                    <p>Tipo de Documento</p>
                    <select class="" id="tipoDocumento" name="tipoDocumento" required>
                        <option value="">Seleccione</option>
                        <option value="CC" <?php echo $record['tipoDocumento'] == 'CC' ? 'selected' : ''; ?>>Cedula</option>
                        <option value="CE" <?php echo $record['tipoDocumento'] == 'CE' ? 'selected' : ''; ?>>Cedula de extranjeria</option>
                        <option value="NIT" <?php echo $record['tipoDocumento'] == 'NIT' ? 'selected' : ''; ?>>Número de Identificación Tributaria</option>
                        <option value="TI" <?php echo $record['tipoDocumento'] == 'TI' ? 'selected' : ''; ?>>Tarjeta de Identidad</option>
                        <option value="Otro"<?php echo $record['tipoDocumento'] == 'Otro' ? 'selected' : ''; ?>>Otro</option>
                    </select>
                </div>

                <div>
                    <p>Nombres Y Apellidos</p>
                    <input type="nombre" id="nombreCompleto" name="nombreCompleto" value="<?php echo $record['nombreCompleto']; ?>" 
                    placeholder="Nombres Y Apellidos" class="" required>
                </div>

                <div>
                    <p>Numero de Documento</p>
                    <input type="number" id="numeroDocumento" name="numeroDocumento" value="<?php echo $record['numeroDocumento']; ?>"
                    placeholder="# Documento" class="" required>
                </div>

                <div>
                    <p>Email:</p>
                    <input type="email" id="email" name="email" value="<?php echo $record['email']; ?>"
                     placeholder="Email" class="" required>
                </div>

                <div>
                    <p>Telefono:</p>
                    <input type="telefono" id="telefono" name="telefono" value="<?php echo $record['telefono']; ?>"
                    placeholder="Telefono" class="" required>
                    </div>

                <p class="">
                    <input type="submit" class="" value="Actualizar Cliente">
                </p>
        </form>
    </div>
    <br>
    <a href="clientes.php">Volver</a>  
</body>
</html>