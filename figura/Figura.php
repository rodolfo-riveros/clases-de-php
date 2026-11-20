<?php

require_once('unir.php');

abstract class Figura{
    abstract public function calcularArea();
}


class Circulo extends Figura implements Imprimible{
    //atributo
    public $radio;

    //metodo constructor
    public function __construct($radio){
        $this->radio = $radio;
    }

    public function calcularArea(){
        return pi() * ($this->radio * $this->radio);
    }

    public function Imprimir(){
        echo " El area de mi circulo es: " . $this->calcularArea();
    }
}

$circulito = new Circulo(5);
$circulito->Imprimir();