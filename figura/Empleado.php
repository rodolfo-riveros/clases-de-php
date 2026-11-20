<?php

require_once('unir.php');

class Empleado {
    public $nombre;
    public $sueldo;

    public function mostrarInfo() {
        echo "Empleado: " . $this->nombre . " - S/. " . $this->sueldo . "<br>";
    }
}

class Gerente extends Empleado implements Imprimible{
    public $bono;

    public function __construct($nombre, $sueldo, $bono){
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
        $this->bono = $bono;
    }
    
    public function calcularSueldoTotal(){
        echo "El sueldo total del genrente es: " . $this->bono + $this->sueldo . "<br>";
    }

    public function Imprimir() {
        echo "Gerente: " . $this->nombre . " - S/. " . $this->bono + $this->sueldo . "<br>";
    }
}

$g = new Gerente("Carlos", 3500 , 500);
$g->Imprimir();

