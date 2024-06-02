<?php
namespace App\models;

class Cliente extends Model
{
    protected $id= 0;
    protected $nombreCompleto = '';
    protected $tipoDocumento = '';
    protected $numeroDocumento = '';
    protected $email = '';
    protected $telefono = '';

    public function get($property)
    {
        return $this->$property;
    }

    public function set($property, $value)
    {
        $this->$property = $value;
    }


}