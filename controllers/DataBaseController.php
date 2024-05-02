<?php
  namespace App\controllers;

  use mysqli;

  class DataBaseController{
      $host = 'localhost';
      $user = 'root';
      $pwd = '';
      $db = 'facturacion_tienda_db';
      $conex = new mysqli($host, $user, $pwd, $db);
    }

    if($conex->connect_error){
        die('Error en la conexión db' . $conex->connect_error);
    }
?>