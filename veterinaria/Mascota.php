<?php

class Mascota{
    public $nombre, $especie, $raza, $sexo;

    //metodo contructor
    function __construct($nombre, $especie, $raza, $sexo){
        $this->nombre = $nombre;
        $this->especie = $especie;
        $this->raza = $raza;
        $this->sexo = $sexo;
    }

    //metodo atender
    function atender(){
        echo "Tu mascota: " . $this->nombre . " fue atendido";
    }

    //metodo mostrar mascota
    function mostrar(){
        echo "Su nombre es: " . $this->nombre;
        echo "<br>";
        echo "Su especie es: " . $this->especie;
        echo "<br>";
        echo "Su raza es: " . $this->raza;
        echo "<br>";
        echo "Su sexo es: " . $this->sexo;
        echo "<br>";
    }
}