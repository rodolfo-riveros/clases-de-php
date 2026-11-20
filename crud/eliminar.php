<?php

require_once "producto.php";

try {
    $id = 10;

    $p = Producto::buscarPorId($id);

    if ($p) {
        $filas = Producto::eliminar($id);
        echo "Se eliminó: " . $p["nombre"] . " (id " . $id . ")<br>";
        echo "Filas eliminadas: " . $filas;
    } else {
        echo "No existe un producto con el id " . $id;
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}