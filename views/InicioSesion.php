<?php
include '../models/usuario.php';

use App\models\usuario;

$usuario = new usuario();
$usuario -> set('id', $_POST['id']);
$usuario -> set('user', $_POST['user']);
$usuario -> set('pwd', $_POST['pwd']);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
</head>
<body>
    <form action="SesionActiva.php" method="post">
        <input type="hidden" name="active" value="<?php echo $active;?>">
        <div>
            <label>Usuario: </label>
            <input name="user" required>
        </div>
        <div>
            <label>Contraseña: </label>
            <input name="pwd" required>
        </div>
        <button type=submit>Inicar sesión</button>
    </form> 
</body>
</html>