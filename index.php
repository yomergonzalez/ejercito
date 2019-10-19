<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 19/10/19
 * Time: 14:05
 */
include_once 'civilizaciones/Bizantinos.php';
include_once 'civilizaciones/Chinos.php';
include_once 'civilizaciones/Ingleses.php';
include_once 'civilizaciones/Civilizacion.php';
include_once 'Ejercitos.php';



$ingleses = new Ingleses();

$ejercito = new Ejercito($ingleses);

$ejercito->entrenarArqueros();
$ejercito->entrenarCaballero();
$ejercito->entrenarPiquero();

$ejercito->transformarPiqueros();
$ejercito->transformarArqueros();
