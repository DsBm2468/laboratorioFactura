<?php

$host = 'localhost';
$user = 'root';
$pwd  = '';
$db   = 'facturacion_tienda_db';
$conex;

$conn = new mysqli($host, $user, $pwd, $db);

if ($conn->connect_error) {
    die("Conexion Fallida: " . $conn->connect_error);
}

$nombre= $_POST['nombres'];
$tipoDocumento = $_POST['tipoDocumento'];
$numeDocumento = $_POST['numeDocumento'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

$sql = "INSERT INTO clientes (nombreCompleto, tipoDocumento, numeroDocumento, telefono, email)
        values ('$nombre', '$tipoDocumento', '$numeDocumento', '$telefono', '$email')";


        


?>