<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 19/10/19
 * Time: 13:26
 */
require_once 'Civilizacion.php';
require_once '../unidades/Arqueros.php';
require_once '../unidades/Caballeros.php';
require_once '../unidades/Piqueros.php';


class Bizantinos extends  Civilizacion{
    /**
     * Ingleses constructor.
     */
    public function __construct ()
    {
        $this->Piqueros= new Piqueros(5);
        $this->Arqueros = new Arqueros(8);
        $this->Cabelleros = new Caballeros(15);
    }


    public function transformarPiqueros(){

        $costo = $this->Piqueros->getCostoTransformacion();

        $this->Piqueros = new Arqueros($this->Piqueros->cantidad);

        return $costo;

    }

    function transformarArqueros ()
    {

        $costo = $this->Arqueros->getCostoTransformacion();

        $this->Arqueros = new Caballeros($this->Arqueros->cantidad);

        return $costo;
    }
}