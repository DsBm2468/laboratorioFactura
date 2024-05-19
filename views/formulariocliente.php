<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cliente</title>
</head>
<body>
<h1 id="empleado">Agregar nuevo cliente</h1>
      <form action="#" class="form" id="form"> 
      <div>
          <p>Nombres Y Apellidos</p>
          <input type="nombre" id="nombres" name="nombres" placeholder="Nombres Y Apellidos" class="field" required> 
        </div>

        <div>
          <p>Tipo de Documento</p>
          <select class="field" id="tipoDoc" name="tipoDocumento" required>
            <option value="">Seleccione</option>
            <option value="Tarjeta de identidad">TI</option>
            <option value="Cédula">CC</option>
          </select>
        </div>
          
        <div>
          <p>Numero de Documento</p>
          <input type="text" id="numDocumento" name="numeDocumento"  placeholder="# Documento" class="field" required> 
        </div> 

        <div>
          <p>Telefono:</p>
          <input type="telefono" id="tel" name="telefono" placeholder="Telefono" class="field" required> 
         </div>

        <div>
          <p>Email:</p>
          <input type="email" id="email" name="email" placeholder="Email" class="field" required> 
        </div>
          
          <p class="center-content">
             <input type="submit" class="btn btn-2" value="Enviar Datos">
          </p>
      </form>

    
</body>
</html>