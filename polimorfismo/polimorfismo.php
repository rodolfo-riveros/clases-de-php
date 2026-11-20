<?php

interface Imprimible {
    public function imprimir();
}

abstract class Figura {
    abstract public function calcularArea();
}

class Circulo extends Figura implements Imprimible {
    public $radio;

    public function __construct($radio) {
        $this->radio = $radio;
    }

    public function calcularArea() {
        return pi() * $this->radio * $this->radio;
    }

    public function imprimir() {
        echo "Círculo de radio " . $this->radio . " - Área: " . round($this->calcularArea(), 2) . "<br>";
    }
}

class Rectangulo extends Figura implements Imprimible {
    public $base;
    public $altura;

    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea() {
        return $this->base * $this->altura;
    }

    public function imprimir() {
        echo "Rectángulo de " . $this->base . " x " . $this->altura . " - Área: " . $this->calcularArea() . "<br>";
    }
}

class Triangulo extends Figura implements Imprimible {
    public $base;
    public $altura;

    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea() {
        return ($this->base * $this->altura) / 2;
    }

    public function imprimir() {
        echo "Triángulo de " . $this->base . " x " . $this->altura . " / 2 " . " - Área: " . $this->calcularArea() . "<br>";
    }
}

$figuras = [ new Circulo(8), new Rectangulo(4,5), new Circulo(6), new Triangulo(8, 15), new Triangulo(2, 6)];

foreach ($figuras as $figura){
    $figura->calcularArea();
    $figura->imprimir();
}