<?php
namespace app\controllers;

  use app\models\Usuario;
  use app\controllers\DataBaseController;

  class UsuarioController{
    
      function validarUsuario($usuario){
        $user = $usuario->getUsuario();
        $pwd = $usuario->getPwd();
        $dataBase =new dataBaseController();
          $sql = "SELECT * FROM usuarios WHERE usuario = '$user' AND pwd = '$pwd'";  
          $result = $dataBase->ejecutarSql($sql);
          if($result->num_rows == 0){
            header('Location: ../index.php');
            return "NO SE INCIO SESION";
          } $_SESSION['sctivarSesion'] = true;
          header('Location: ../inicio.php');
          return "SI se inicio sesión";
        }
  }
?>