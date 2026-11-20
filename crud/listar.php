<?php

require_once "producto.php";

try {
    $productos = Producto::listar();

    echo "LISTA DE PRODUCTOS<br>";

    foreach ($productos as $p) {
        echo $p["id"] . " - " . $p["nombre"] . " - S/ " . $p["precio"] . "<br>";
    }

    echo "Total de productos: " . count($productos);


    //listar productos por busqueda

    echo "<br><br>PRODUCTOS DE MÁS DE S/ 10<br>";

    $caros = Producto::buscarPorPrecio(2);

    foreach ($caros as $p) {
        echo $p["nombre"] . " - S/ " . $p["precio"] . "<br>";
    }

    echo "Encontrados: " . count($caros);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}