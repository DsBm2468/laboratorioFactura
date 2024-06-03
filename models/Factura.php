<?php
namespace App\models;

require_once 'Model.php';

class Factura extends Model 
{
    protected $refencia = '';
    protected $fecha = '';
    protected $idCliente = 0;
    protected $descuento = '';
    protected $valorFactura = 0;
}

