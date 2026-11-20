<?php

require_once "producto.php";

try {
    $p = Producto::buscarPorId(100);

    if ($p) {
        echo "Id: " . $p["id"] . "<br>";
        echo "Nombre: " . $p["nombre"] . "<br>";
        echo "Precio: S/ " . $p["precio"];
    } else {
        echo "No existe un producto con ese id";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}