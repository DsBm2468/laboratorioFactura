<?php
  include "../controllers/DataBaseController.php";
  //namespace app\controllers;

  use app\models\Usuario;
  use app\controllers\DataBaseController;

  class UsuarioController{
    
      function validarUsuario($usuario){
        $dataBase =new dataBaseController();
          $sql = "SELECT * FROM usarios WHERE user = '$usuario' AND pwd = '$pwd'";  
          $result = $dataBase->query($sql);
          if($result->num_rows == 0){
            header('Location: ../index.php');
            return "NO SE INCIO SESION";
          } $_SESSION['sctivarSesion'] = true;
          header('Location: ../inicio.php');
          return "SI se inicio sesión";
        }
  }
?>