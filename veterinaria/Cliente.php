<?php

class Cliente{
    public $nombre, $dni;

    //metodo contructor
    function __construct($nombre, $dni){
        $this->nombre = $nombre;
        $this->dni = $dni;
    }

    //metodo mostrar cliente
    function mostrar(){
        echo "Su nombre es: " . $this->nombre;
        echo "<br>";
        echo "Su dni es: " . $this->dni;
        echo "<br>";
    }
}