<?php
   namespace App\controllers;

   use mysqli;

   class DataBaseController{
      private $host = 'localhost';
      private $user = 'root';
      private $pwd = '';
      private $db = 'facturacion_tienda_db';
      private $conex;
      
      function __construct(){
        $this->conex = new mysqli(
            $this->host,
            $this->user,
            $this->pwd,
            $this->db
        );
      }

    public function getConnection()
    {
      return $this->conex;

    }

    function ejecutarSql($sql){// esta funcion ejecutar una sentencia sql en la base de datos (eso se hace con query)
      
        return $this->conex->query($sql);
     }

    function close(){
        $this->conex->close();
    }
  }
?>
