<?php

include '../controllers/DataBaseController.php';

if (isset($_POST['Usuario']) && isset($_POST['Clave'])) {//isset() es para verificar si una variable está definida y su valor No es NULL
    function validar($datos){
        $datos = trim($datos); //trim elimina todos los espacios de una cadena de texto, dejando solo un espacio entre cada palabra
        $datos = stripcslashes($datos); //stripcslashes quita las barras de un string con comillas escapadas
        $datos = htmlspecialchars($datos);//evita que el texo introducido por el usuario contenga código HTML
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

        $sql = "SELECT * FROM usarios WHERE usuario = '$Usuario' AND pwd = '$Clave'";
        $result = mysqli_query($conex, $sql); // mysqli_query() combina la sentencia de ejecución con su conjunto de resultados obtenido de un buffer, si lo hubiera, en una llamada.

        if (mysqli_num_rows($result)===1){ //mysqli_num_rows() Obtiene el número de filas en un resultado.
            $row = mysqli_fetch_assoc($result);
            if($row['Usuario'] === $Usuario && $row['Clave'] === $Clave){
                $_SESSION['Usuario'] = $row['Usuario'];
                $_SESSION['Id'] = $row['Id'];
            }
        }
    }
}
?>