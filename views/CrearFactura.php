<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Global.css">
    <title>Generar Factura</title>
</head>

<body>
    <header class="header">
        <nav class="nav">
            <a href="CrearFactura.php" class="logo nav-link">Crear Factura</a>
            <ul class="nav-menu">
                <li class="nav-menu-item"><a href="inicio.php" class="nav-menu-link nav-link">Inicio</a>
                </li>
                <li class="nav-menu-item"><a href="#" class="nav-menu-link nav-link">Clientes</a>
                </li>
                <li class="nav-menu-item"><a href="cerrarSesion.php" class="nav-menu-link nav-link">Cerrar Sesión</a>
                </li>
            </ul>
        </nav>
    </header>
    <div>
        <section class="form-cliente">
            <form action="verificarFactura.php" method="post">
                <div>
                    <h4>Valor de La Factura</h4>
                    <input class="controls" type="number" name="valorFactura" min=100 placeholder="Ingrese el valor total de su factura" required>
                </div>
                <div>
                    <input type="submit" class="botons" value="Guardar Total">
                </div>
            </form>
        </section>
    </div>

</body>

</html>