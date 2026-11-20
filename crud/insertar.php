<?php

require_once "producto.php";

try {
    $p1 = new Producto("Fideos Don Vittorio 500 g", 3.20);
    $id = $p1->guardar();

    echo "Producto guardado con id " . $id;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}