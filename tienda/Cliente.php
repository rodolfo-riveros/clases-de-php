<?php
class Cliente {
    public $nombre;
    public $dni;
    public $totalGastado;

    public function __construct($nombre, $dni, $totalGastado) {
        $this->nombre = $nombre;
        $this->dni = $dni;
        $this->totalGastado = $totalGastado;
    }

    public function registrarCompra($monto) {
        $this->totalGastado = $this->totalGastado + $monto;
        echo $this->nombre . " ahora ha gastado un total de S/ " . $this->totalGastado;
    }

    public function mostrar() {
        echo $this->nombre . " | DNI: " . $this->dni . " | Total gastado: S/ " . $this->totalGastado;
    }
}