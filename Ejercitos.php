<?php

include_once "Civilizacion.php";

class Ejercito {

    public $coins = 1000;
    private $civilizacion;

    /**
     * Ejercito constructor.
     */
    public function __construct (Civilizacion $civ )
    {
        $this->civilizacion = $civ;
    }

    /**
     * @return Civilizacion
     */
    public function getCivilizacion ()
    {
        return $this->civilizacion;
    }


    public function getArqueros(){

        return $this->civilizacion->getArqueros();
    }


    public function getCaballeros(){

        return $this->civilizacion->getCaballeros();
    }

    public function getPiqueros(){

        return $this->civilizacion->getPiqueros();
    }


    public function entrenarCaballero(){

        $costo = $this->civilizacion->getCaballeros()->entrenamiento();
        $this->coins -= $costo;
    }



    public function entrenarPiquero(){

        $costo = $this->civilizacion->getPiqueros()->entrenamiento();
        $this->coins -= $costo;
    }


    public function entrenarArqueros(){

        $costo = $this->civilizacion->getArqueros()->entrenamiento();
        $this->coins -= $costo;
    }

    public function transformarPiqueros(){

        $costo = $this->civilizacion->transformarPiqueros();
        $this->coins -= $costo;

    }

    public function transformarArqueros(){

        $costo = $this->civilizacion->transformarArqueros();
        $this->coins -= $costo;

    }

}

?>