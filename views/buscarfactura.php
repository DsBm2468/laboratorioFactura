<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Global.css">
    <title>Buscar Facturas</title>
</head>

<body>
    <header class="header">
        <nav class="nav">
            <a href="#" class="logo nav-link">Buscar Facturas</a>
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
</body>
<section class="form-cliente">
    <form action="facturabuscada.php" class="form" method="post">
        <h4>Buscar Factura</h4>
        <div>
            <input class="controls" type="text"  name="numeroDocumento" placeholder=" Ingrese su Numero de Documento"  required>
        </div>
        <input type="submit" class="botons" value="Buscar Factura">
</html>