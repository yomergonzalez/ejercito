<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 19/10/19
 * Time: 12:48
 */
require_once "../Ejercitos.php";


class Piqueros extends Unidad {

    /**
     * Piqueros constructor.
     */
    public function __construct ($cantidad)
    {
        $this->cantidad = $cantidad;
        $this->fuerza = 5;
        $this->costoEntrenamiento= 10;
        $this->costoTransformacion = 30;
        $this->beneficio = 3;
    }


    /**
     * @return int
     */
    public function getCostoTransformacion ()
    {
        return $this->costoTransformacion;
    }




}