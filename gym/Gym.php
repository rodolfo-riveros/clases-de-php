<?php

class Socio{
    //atributos
    public $nombre, $dni, $celular, $pago;
    private $membresia = 500;

    //metodo contructor
    function __construct($nombre, $dni, $celular, $pago){
        $this->nombre = $nombre;
        $this->dni = $dni;
        $this->celular = $celular;
        $this->pago = $pago;
    }

    //metodo mostrar datos
    function mostrar(){
        echo "El nombre del socio es: " . $this->nombre;
        echo "<br>";
        echo "Su dni del socio es: " . $this->dni;
        echo "<br>";
        echo "Su celular del socio es: " . $this->celular;
        echo "<br>";
        echo "El monto que pago es: " . $this->pago;
        echo "<br>";
        echo "<br>";
    }

    //metodo pago
    function pagoMembresia(){
        if($this->pago >= $this->membresia){
            echo "El socio " . $this->nombre . " esta al dia con su membresia";
            echo "<br>";
            echo "<br>";
        }else{
            echo "El socio " . $this->nombre . " no esta al dia con su membresia";
            echo "<br>";
            echo "<br>";
        }
    }
}

$socios = [];

$socios[] = new Socio("Juancho el malaco", "98765432", "987654321", 50);
$socios[] = new Socio("Maria tu terror", "87654321", "987654320", 150);
$socios[] = new Socio("Alex el dormilon", "98765430", "987654371", 500);


foreach ($socios as $s) {
    $s->mostrar();
}

foreach ($socios as $s) {
    $s->pagoMembresia();
}