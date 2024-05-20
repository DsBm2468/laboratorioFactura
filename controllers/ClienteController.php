<?php

namespace App\controllers;
use App\models\Cliente;

class ClienteController 
{
    function read()
    {
        $dataBase = new DataBaseController();
        $sql = "select * from clientes";
        $result = $dataBase->execSql($sql);
        $clientes = [];
        if($result->num_rows == 0) {
            while($item = $result->fetch_assoc()){
                $cliente = new Cliente();
                $cliente->set('id', $item['id']);
                $cliente->set('nombreCompleto', $item['nombreCompleto']);
                $cliente->set('tipoDocumento', $item['tipoDocumento']);
                $cliente->set('numeroDocumento', $item['numeroDocumento']);
                $cliente->set('email', $item['email']);
                $cliente->set('telefono', $item['telefono']);
                $clientes[] = $cliente;
            }

        }
        $dataBase->close();
        return $clientes;
    }

    function create($cliente)
    {
        $sql = "INSERT INTO clientes(nombreCompleto, tipoDocumento, numeroDocumento, email, telefono) VALUES (";
        $sql .= "'".$cliente->get('nombreCompleto')."',";
        $sql .= "'".$cliente->get('tipoDocumento')."',";
        $sql .= "'".$cliente->get('numeroDocumento')."',";
        $sql .= "'".$cliente->get('email')."',";
        $sql .= "'".$cliente->get('telefono')."',";
        $sql .= ")";
        $dataBase = new DataBaseController();
        $result = $dataBase->execSql($sql);
        $dataBase->close();
        return $result;
    }

    function update()
    {

    }
}
?>