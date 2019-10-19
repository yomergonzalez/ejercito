<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 19/10/19
 * Time: 13:04
 */

abstract  class Civilizacion {

    public $Caballeros;
    public $Piqueros;
    public $Arqueros;

    /**
     * @return mixed
     */
    public function getCaballeros ()
    {
        return $this->Caballeros;
    }

    /**
     * @return mixed
     */
    public function getPiqueros ()
    {
        return $this->Piqueros;
    }

    /**
     * @return mixed
     */
    public function getArqueros ()
    {
        return $this->Arqueros;
    }

    abstract function transformarArqueros();

    abstract function transformarPiqueros();


}