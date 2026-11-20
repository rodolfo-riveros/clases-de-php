<?php

class Estudiante{
    public $nombre, $nota;

    //metodo constructor
    function __construct($nombre, $nota){
        $this->nombre = $nombre;
        $this->nota = $nota;
    }

    //metodo mostrar
    function MostrarEstudiante(){
        echo "El estudiante es: " . $this->nombre;
        echo "<br>";
        echo "Su nota es:". $this->nota;
        echo "<br>";
        echo "<br>";
    }
}

