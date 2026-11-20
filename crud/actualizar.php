<?php

require_once "producto.php";

try {
    // Antes
    $antes = Producto::buscarPorId(1);
    echo "ANTES: " . $antes["nombre"] . " - S/ " . $antes["precio"] . "<br>";

    // Actualizar
    $filas = Producto::actualizar(1, "Arroz Costeño 1 kg", 4.80);
    echo "Filas actualizadas: " . $filas . "<br>";

    // Después
    $despues = Producto::buscarPorId(1);
    echo "DESPUÉS: " . $despues["nombre"] . " - S/ " . $despues["precio"];
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}