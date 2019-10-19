<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 19/10/19
 * Time: 12:48
 */
require_once "../Ejercitos.php";


class Caballeros extends Unidad {

    /**
     * Piqueros constructor.
     */
    public function __construct ($cantidad)
    {
        $this->cantidad = $cantidad;
        $this->fuerza = 20;
        $this->costoEntrenamiento= 30;
        $this->beneficio = 10;
    }



}