<?php

class Franquicia{
    public $nombre, $producto;


    function __construct($nombre, $producto){
        $this->nombre = $nombre;
        $this->producto = $producto;
    }

    function getMostrar(){
        echo "El nombre de la Franquicia es: " . $this->nombre;
        echo "<br>";
        echo "Y el producto es: " . $this->producto;
        echo "<br>";
    }

}

class KfcUrubamba extends Franquicia{

}

class KfcLima extends Franquicia{
    
}

class KfcIquitos extends Franquicia{
    
}


$urubamba = new KfcUrubamba("kFC URUBAMBA", "Pollo con papas al hilo");
$lima = new KfcLima("kFC Lima", "Pollo con papas andinas");
$iquitos = new KfcIquitos("kFC Iquitos", "Pollo con yuca");

$urubamba->getMostrar();
$lima->getMostrar();
$iquitos->getMostrar();
