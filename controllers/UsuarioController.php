<?php
namespace app\controllers;

  use App\models\Usuario;
  use app\controllers\DataBaseController;

  class UsuarioController{
    
      function validarUsuario($usuario){
        $usr = $usuario->getUsuario();
        $pwd1 = $usuario->getPwd();
        $dataBase =new dataBaseController();
          $sql = "SELECT * FROM usarios WHERE user = '$usr' AND pwd = '$pwd1'";  
          $result = $dataBase->execSql($sql);
          if($result->num_rows == 0){
            header('Location: ../index.php');
            return "NO SE INCIO SESION";
          } $_SESSION['sctivarSesion'] = true;
          header('Location: ../inicio.php');
          return "SI se inicio sesión";
        }
  }
?>