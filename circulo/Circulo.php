<?php

class Circulo {
    public $radio;
    public static $contador = 0;

    public function __construct($radio) {
        $this->radio = $radio;
        self::$contador++;
    }

    public function calcularArea() {
        return pi() * $this->radio * $this->radio;
    }

    public static function obtenerContador() {
        return self::$contador;
    }
}

$circulos = [new Circulo(5), new Circulo(8), new Circulo(2), new Circulo(3)];

?>