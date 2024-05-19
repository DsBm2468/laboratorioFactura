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
                $cliente->set('nombres', $item['nombres']);
                $cliente->set('tipoDoc', $item['tipoDoc']);
                $cliente->set('numDocumento', $item['numDocumento']);
                $cliente->set('tel', $item['tel']);
                $cliente->set('email', $item['email']);
                $clientes[] = $cliente;
            }

        }
        $dataBase->close();
        return $clientes;
    }

    function create($contacto)
    {
        
    }
 





}
?>