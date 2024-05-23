<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Global.css">
    <title>Crear Cliente</title>
</head>

<body>
    <header class="header">
        <nav class="nav">
            <a href="formulariocliente.php" class="logo nav-link">Clientes</a>
            <ul class="nav-menu">
                <li class="nav-menu-item"><a href="inicio2.php" class="nav-menu-link nav-link">Inicio</a>
                </li>
                <li class="nav-menu-item"><a href="#" class="nav-menu-link nav-link">Productos</a>
                </li>
                <li class="nav-menu-item"><a href="#" class="nav-menu-link nav-link">Facturas</a>
                </li>
                <li class="nav-menu-item"><a href="cerrarSesion.php" class="nav-menu-link nav-link">Cerrar Sesión</a>
                </li>
            </ul>
        </nav>
    </header>

    <div class="contenido">
        <div class="articulos">
            <div>
                <form action="Basescliente.php" class="form" id="form" method="post">
                    <div>
                        <p>Tipo de Documento</p>
                        <select class="field" id="tipoDocumento" name="tipoDocumento" required>
                            <option value="">Seleccione</option>
                            <option value="CC">Cedula</option>
                            <option value="CE">Cedula de extranjeria</option>
                            <option value="NIT">Número de Identificación Tributaria</option>
                            <option value="TI">Tarjeta de Identidad</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                    <div>
                        <p>Nombres Y Apellidos</p>
                        <input type="nombre" id="nombreCompleto" name="nombreCompleto" placeholder="Nombres Y Apellidos" class="field" required>
                    </div>
                    <div>
                        <p>Numero de Documento</p>
                        <input type="number" id="numeroDocumento" name="numeroDocumento" placeholder="# Documento" class="field" required>
                    </div>
                    <div>
                        <p>Email:</p>
                        <input type="email" id="email" name="email" placeholder="Email" class="field" required>
                    </div>
                    <div>
                        <p>Telefono:</p>
                        <input type="telefono" id="telefono" name="telefono" placeholder="Telefono" class="field" required>
                    </div>
                    <p class="center-content">
                        <input type="submit" class="btn btn-2" value="Agregar Cliente">
                    </p>
                </form>
            </div>
        </div>
        <div class="menu-secundario">
            <a href="clientes.php" class="nav-link1">Lista de Clientes</a>
            <a href="" class="nav-link1">Lista de productos</a>
            <a href="" class="nav-link1">Generar Factura</a>
        </div>
        <div>
</body>

</html>