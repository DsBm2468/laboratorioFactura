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
          <form action="InicioSesion.php" method="post">
              <div>
                   <label>Usuario: </label>
                   <input type="text" name="user" required>
             </div>
             <div>
                  <label>Contraseña: </label>
                  <input name="pwd" required>
             </div>
             <button type=submit>Iniciar sesión</button>
             <a herf="views/RegistroUsuario.php">Registrarse</a>
            </form> 
        </tbody>
        
    </body>
</html>