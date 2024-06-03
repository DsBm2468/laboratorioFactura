<!DOCTYPE html>
<html lang="es">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Aplicación Generar Facturas</title>
  </head>
  <body>
      <h1>Generar Facturas</h1>
      <h2>Iniciar sesión</h2>
      <tbody>
          <form action="views/InicioSesion.php" method="post">
              <div>
                   <label for="">Usuario: </label>
                   <input type="text" name="user" required>
             </div>
             <div>
                  <label for="">Contraseña: </label>
                  <input type="password" name="pwd" required>
             </div>
             <input class="enviar" type="submit" value="Iniciar sesion">
            </form> 
        </tbody>
    </body>
    <button type=submit>Iniciar sesión</button>
</html>