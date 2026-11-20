<?php

class Habitacion{
    public $numero;
    public $tipo;
    private $precio;
    public $estado;
    public $cliente;
    
    function __construct($numero, $tipo, $precio, $estado, $cliente){
        $this->numero = $numero;
        $this->tipo = $tipo;
        $this->precio = $precio;
        $this->estado = $estado;
        $this->cliente = $cliente;
    }

    function mostrar(){
        echo "El numero de la habitacion es: " . $this->numero;
        echo "<br>";
        echo "El tipo de la habitacion es: " . $this->tipo;
        echo "<br>";
        echo "El precio de la habitacion es: " . $this->precio;
        echo "<br>";
        echo "El cliente que ocupa la habitacion es: " . $this->cliente;
        echo "<br>";
    }

    function ConsultaHabitacion($conteo){
        if($this->estado === "ocupado"){
            $conteo++;
            echo "La habitacion esta ocupado.";
            echo "<hr>";
            echo "Habitaciones ocupadas: " . $conteo;
            echo "<hr>";
        }else{
            $conteo++;
            echo "La habitacion esta disponible.";
            echo "<hr>";
            echo "Habitaciones disponibles: " . $conteo;
            echo "<hr>";
        }
    }
}

$habitaciones = [];

$habitaciones[] = new Habitacion("201", "Matrimonial", "150", "libre", "");
$habitaciones[] = new Habitacion("202", "Simple", "80", "ocupado", "Juancho");


foreach ($habitaciones as $h) {
    $h->mostrar();
}

foreach ($habitaciones as $h) {
    $h->ConsultaHabitacion(0);
}