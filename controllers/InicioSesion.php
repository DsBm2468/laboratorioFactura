<?php

include '../controllers/DataBaseController.php';
include '../models/Usuario.php';

session_start();

if (isset($_POST['Usuario']) && isset($_POST['Clave'])) {//isset() es para verificar si una variable está definida y su valor No es NULL
    function validar($datos){
        $datos = trim($datos); //trim elimina todos los espacios de una cadena de texto, dejando solo un espacio entre cada palabra
        $datos = stripcslashes($datos); //stripcslashes quita las barras de un string con comillas escapadas
        $datos = htmlspecialchars($datos);//evita que el texto introducido por el usuario contenga código HTML
        return $data;
    }
    $Usuario = validar($_POST['Usuario']);
    $Clave = validar($_POST['Clave']);

    if(empty($Usuario)){ //empty() determina si una variable está vacía.
        header("Location: index.php?error=Debes ingresar el usuario"); //header() es usado para enviar encabezados HTTP sin formato
        //el ? es que se devuelva a la locacion(index.php) con un error con un mensaje
    } else if(empty($Clave)){
        header("Location: index.php?error=Debes ingresar la contraseña");
    } else {

        $sql = "SELECT * FROM usarios WHERE usuario = '$Usuario' AND pwd = '$Clave'";//select es para consultar la base de datos
        $result = mysqli_query($conex, $sql); // mysqli_query() combina la sentencia de ejecución con su conjunto de resultados obtenido de un buffer, si lo hubiera, en una llamada.

        
        /*if (mysqli_num_rows($result)===1){ //mysqli_num_rows() Obtiene el número de filas en un resultado.
            $row = mysqli_fetch_assoc($result);//mysqli_fetch_assoc se encarga de recorrer la lista de datos
            if($row['Usuario'] === $Usuario && $row['Clave'] === $Clave){
                $_SESSION['Usuario'] = $row['Usuario'];
                $_SESSION['Id'] = $row['Id'];
                header("Location: inicio.php");
                exit();
            } else{
                header("Location: index.php")
            }
        }*/
    }
}
session_unset();

session_destroy();
?>


<!--php

  include '../controllers/DataBaseController.php';
  include '../models/Usuario.php';

  $Usuario = $_POST['user'];
  $Clave = $_POST['pwd'];

  session_start();

  $_SESSION['user'] = $Usuario;
  $_SESSION['pwd'] = $Clave;

  $sql = "SELECT * FROM usarios WHERE user = '$Usuario' AND pwd = '$Clave'";//select es para consultar la base de datos
  $result = mysqli_query($conex, $sql); // mysqli_query() combina la sentencia de ejecución con su conjunto de resultados obtenido de un buffer, si lo hubiera, en una llamada.
  
  $filas=ysqli_num_rows($result);

  if ($filas){ //mysqli_num_rows() Obtiene el número de filas en un resultado.
      header("Location: inicio.php");
      exit();
    } else {
          header("Location: index.php?error=Debes ingresar un usuario y una contraseña");//header() es usado para enviar encabezados HTTP sin formato
          //el ? es que se devuelva a la locacion(index.php) con un error con un mensaje
        }

  mysqli_free_result($result); // mysqli_free_result() libera la memoria asociada al resultado representado por el parámetro resultado
  mysqli_close($conex);
?>-->
