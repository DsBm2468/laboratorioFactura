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
    <section name="selectcliente">
       <label>Seleccione al cliente: </label>
       <select>
          <?php
              $getClientes1 = "select * from cliente order by id";
              $getClientes2 = mysqli_query($getClientes1);
              while($row = mysqli_fetch_array($getClientes2)){
                  $nombreCompleto = $row['nombre'];
                  $tipoDocumento = $row['tipodoc'];
                  $numeroDocumento = $row['numdoc'];
                  $email = $row['email'];

                  ?>
                  <option value="<?php echo $id; ?>"
                      <?php echo $nombreCompleto; ?>>
                    </option>
                  <?php
                }
            ?>
       </select>
        <label>Valor total productos: </label>
        <input name="totalProduct" type="money_format" id="totalProduct">
        <button href="facturaFinal.php">Mostrar factura</button>
    </section>
</body>
</html>