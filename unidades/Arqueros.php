<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 19/10/19
 * Time: 12:48
 */
require_once "../Ejercitos.php";


class Arqueros extends Unidad {

    /**
     * Piqueros constructor.
     */


    public function __construct ($cantidad)
    {
        $this->cantidad = $cantidad;
        $this->fuerza = 10;
        $this->costoEntrenamiento= 20;
        $this->costoTransformacion= 40;
        $this->beneficio = 7;

    }

    /**
     * @return int
     */
    public function getCostoTransformacion ()
    {
        return $this->costoTransformacion;
    }



}