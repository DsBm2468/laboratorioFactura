<?php

namespace App\controllers;

use App\models\Factura;
use DateTime;

class FacturaController
{
    function read()
    {
        $dataBase = new DataBaseController();
        $sql = "SELECT * FROM facturas";
        $result = $dataBase->execSql($sql);
        $facturas = [];
        if ($result->num_rows == 0) {
            return $facturas;
        }
        while ($item = $result->fetch_assoc()) {
            $factura = new Factura();
            $factura->set('referencia', $item['referencia']);
            $factura->set('fecha', $item['fecha']);
            $factura->set('idCliente', $item['idCliente']);
            $factura->set('descuento', $item['descuento']);
            $factura->set('valorFactura', $item['valorFactura']);
            array_push($facturas, $factura);
        }
        $dataBase->close();
        return $facturas;
    }

    function crear($factura)
    {
        if (isset($_COOKIE['clienteId'])) {
            $id = $_COOKIE['clienteId'];
        }

        date_default_timezone_get('America/Bogota');
        $fecha = date("Y-m-d H:i:s");
        $fecharef = date("ymd-His");
        $referencia = $fecharef . "-" . $id;

        setcookie('refact', $referencia, time() + (86400 * 30), "/");

        $total = $factura->get('valorFactura');
        if ($total > 100000 && $total <= 650000) {
            $porcentajeDescuento = 5;
            $descuento = $porcentajeDescuento / 100;
            $monto = $total * $descuento;
            $valorFactura = $total - $monto;
        } else if ($total > 650000) {
            $porcentajeDescuento = 10;
            $descuento = $porcentajeDescuento / 100;
            $monto = $total * $descuento;
            $valorFactura = $total - $monto;
        } else {
            $porcentajeDescuento = 0;
            $valorFactura = $total;
        }

        $sql = "INSERT INTO facturas (referencia, fecha, idCliente, descuento, valorFactura) VALUES (";
        $sql .= "'" . $referencia . "',";
        $sql .= "'" . $fecha . "',";
        $sql .= "'" . $id . "',";
        $sql .= "'" . $porcentajeDescuento . "',";
        $sql .= "'" . $valorFactura . "')";

        $dataBase = new DataBaseController();
        $result = $dataBase->execSql($sql);

        $dataBase->close();

        return $result;

        function mostrarFacturasCliente()
        {
            $dataBase = new DataBaseController();
            if(isset($_COOKIE['clienteId'])){
                $id = $_COOKIE['clienteId'];
            }
            $sql = "SELECT * FROM facturas WHERE idCliente='".$id."'";
            $result = $dataBase->execSql($sql);
            $facturas = [];
            if ($result->num_rows == 0){
                return $facturas;
            }
            while ($item = $result->fetch_assoc()){
                $factura = new Factura();
                $factura->set('referencia', $item['referencia']);
                $factura->set('fecha', $item['fecha']);
                $factura->set('idCliente', $item['idCliente']);
                $factura->set('descuento', $item['descuento']);
                $factura->set('valorFactura', $item['valorFactura']);
                array_push($facturas, $factura);
            }
            $dataBase->close();
            return $facturas;
        }
    }
}
