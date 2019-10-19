<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 19/10/19
 * Time: 12:45
 */

class  Unidad {

    public $fuerza;
    public $cantidad;
    public $costoEntrenamiento;
    public $beneficio;
    public $costoTransformacion;

    protected function entrenamiento(){

        $this->fuerza += $this->beneficio;
        return $this->costoEntrenamiento;

    }


}