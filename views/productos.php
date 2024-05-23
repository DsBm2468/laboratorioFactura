<?php
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
        <label>Articulo(s): </label>
        <select name="artSelect" id="artSelect">
            <option value="0">...</option>
            <option value="1">Maleta deportiva</option>
            <option value="2">Colchoneta profesional</option>
            <option value="3">Bandas elasticas</option>
            <option value="4">Casco para bicicleta</option>
            <option value="5">Barra multifuncional</option>
            <option value="6">Lazo para ejercicio</option>
            <option value="7">Gorra deportiva</option>
            <option value="8">Botella de agua deportiva</option>
            <option value="9">Kit de entrenamiento</option>
            <option value="10">Canguro riñonera</option>
            <option value="11">Guantes de entrenamiento</option>
            <option value="12">Rueda abdominales</option>
            <option value="13">BAnco de pesas</option>
        </select>
        <div>
            <label>¿Cuántos de estos artículos deseas llevar?  </label>
            <input type="number" min="1" required>
        </div>
        <button id="agregar">Agregar articulo(s) a la lista</button>
    </section>
</body>
</html>