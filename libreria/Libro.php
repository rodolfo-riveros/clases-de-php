<?php

class Libro {
    public $titulo, $autor, $precio;

    function __construct($titulo, $autor, $precio){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->precio = $precio;
    }

    //metodo mostrar
    function mostrar(){
        echo $this->titulo . " - " .  $this->autor . " - " . $this->precio; 
    }

}

$libro1 = new Libro("Rios Profundos", "Jose Maria Arguedas", 50.96);

$libro1->mostrar();