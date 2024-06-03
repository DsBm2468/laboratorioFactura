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
                <li class="nav-menu-item"><a href="inicio.php" class="nav-menu-link nav-link">Inicio</a>
                </li>
                <li class="nav-menu-item"><a href="#" class="nav-menu-link nav-link">Facturas</a>
                </li>
                <li class="nav-menu-item"><a href="cerrarSesion.php" class="nav-menu-link nav-link">Cerrar Sesión</a>
                </li>
            </ul>
        </nav>
    </header>
    <section class="form-cliente">
        <form action="validarcliente.php" class="form" id="form" method="post">
            <h4>Formulario Cliente</h4>
            <select class="controls" id="tipoDocumento" name="tipoDocumento" placeholder="Tipo de Documento" required>
                <option value="">Seleccione</option>
                <option value="CC">Cedula</option>
                <option value="CE">Cedula de extranjeria</option>
                <option value="NIT">Número de Identificación Tributaria</option>
                <option value="TI">Tarjeta de Identidad</option>
                <option value="Otro">Otro</option>
            </select>
            </div>
            <div>
                <input type="nombre" id="nombreCompleto" name="nombreCompleto" placeholder="Nombres Y Apellidos" class="controls" required>
            </div>
            <div>
                <input type="number" id="numeroDocumento" name="numeroDocumento" placeholder="Numero Documento" class="controls" required>
            </div>
            <div>
                <input type="email" id="email" name="email" placeholder="Email" class="controls" required>
            </div>
            <div>
                <input type="telefono" id="telefono" name="telefono" placeholder="Telefono" class="controls" required>
            </div>
            <input type="submit" class="botons" value="Agregar Cliente">
            </p>
        </form>
    </section>
</body>

</html>