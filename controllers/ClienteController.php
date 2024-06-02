<?php

namespace App\controllers;

use App\models\Cliente;
use App\controllers\DataBaseController;

class ClienteController 
{
    function read()
    {
        $dataBase = new DataBaseController();
        $sql = "SELECT * FROM clientes";
        $result = $dataBase->ejecutarSql($sql);
        $clientes = [];
        if($result->num_rows == 0) {
            return $clientes;
        }
        while($item = $result->fetch_assoc()){
            
                $cliente = new Cliente();
                $cliente->set('id', $item['id']);
                $cliente->set('nombreCompleto', $item['nombreCompleto']);
                $cliente->set('tipoDocumento', $item['tipoDocumento']);
                $cliente->set('numeroDocumento', $item['numeroDocumento']);
                $cliente->set('email', $item['email']);
                $cliente->set('telefono', $item['telefono']);
                array_push($clientes, $cliente);
                
            }
        $dataBase->close();
        return $clientes;
    }

    function create($cliente)
    {
        $sql = "INSERT INTO clientes(nombreCompleto, tipoDocumento, numeroDocumento, email, telefono) VALUES";
        $sql .= "(";
        $sql .= "'".$cliente->get('nombreCompleto')."',";
        $sql .= "'".$cliente->get('tipoDocumento')."',";
        $sql .= "'".$cliente->get('numeroDocumento')."',";
        $sql .= "'".$cliente->get('email')."',";
        $sql .= "'".$cliente->get('telefono')."'";
        $sql .= ")";
        $dataBase = new DataBaseController();
        $result = $dataBase->ejecutarSql($sql);
        $dataBase->close();
        return $result;
    }

    function update($cliente)
    {
        $sql = "UPDATE clientes SET";
        $sql .= "nombreCompleto='" . $cliente->get('nombreCompleto') . "',";
        $sql .= "tipoDocumento ='" . $cliente->get('tipoDocumento') . "',";
        $sql .= "numeroDocumento = '" . $cliente->get('numeroDocumento') . "',";
        $sql .= "email ='" . $cliente->get('email') . "',";
        $sql .= "telefono ='" . $cliente->get('telefono') . "' ";
        $sql .= "WHERE id = " . $cliente->get('id');
        $dataBase = new DataBaseController();
        $result = $dataBase->ejecutarSql($sql);
        $dataBase->close();
        return $result;
    }

    function clienteExistente($numeroDocumento)
    {
        $dataBase = new DataBaseController();
        $conn = $dataBase->getConnection();
        $query = $conn->prepare("SELECT COUNT(*) as count FROM clientes WHERE numeroDocumento = ?");
        $query->bind_param("s", $numeroDocumento);
        $query->execute();
        $result = $query->get_result();
        $row = $result->fetch_assoc();
        return $row['count'] > 0;  
    }

    function idCliente($documento){
        $dataBase = new DataBaseController();
        $sql = "SELECT * FROM clientes WHERE numeroDocumento='".$documento."'";
        $result = $dataBase->ejecutarSql($sql);
        $clientes = [];
        if($result->num_rows == 0){
            return $clientes;
        }
        while ($item = $result->fetch_assoc()) {

            $cliente = new Cliente();
            $cliente->set('id', $item['id']);
            array_push($clientes, $cliente);

            $id=$cliente->get('id');
            setcookie('clienteId',$id, time() + (86400 * 30), "/");
        }
        $dataBase->close();
        return $clientes;
    }
}
?>