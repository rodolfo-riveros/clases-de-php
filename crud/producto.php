<?php

require_once "conexion.php";

class Producto {
    const igv = 0.18;
    public $nombre;
    public $precio;

    public function __construct($nombre, $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function guardar(){
        $pdo = Conexion::conectar();
        $consulta = $pdo->prepare("INSERT INTO productos (nombre, precio) VALUES (?, ?)");
        $consulta->execute([$this->nombre, $this->precio]);
        return $pdo->lastInsertId();
    }

    public static function listar() {
        $pdo = Conexion::conectar();
        $consulta = $pdo->prepare("SELECT * FROM productos ORDER BY nombre");
        $consulta->execute();
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function buscarPorPrecio($minimo) {
        $pdo = Conexion::conectar();
        $consulta = $pdo->prepare("SELECT * FROM productos WHERE precio > ? ORDER BY nombre");
        $consulta->execute([$minimo]);
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function buscarPorId($id) {
        $pdo = Conexion::conectar();
        $consulta = $pdo->prepare("SELECT * FROM productos WHERE id = ?");
        $consulta->execute([$id]);
        return $consulta->fetch(PDO::FETCH_ASSOC);
    }

    public static function actualizar($id, $nombre, $precio) {
        $pdo = Conexion::conectar();
        $consulta = $pdo->prepare("UPDATE productos SET nombre = ?, precio = ? WHERE id = ?");
        $consulta->execute([$nombre, $precio, $id]);
        return $consulta->rowCount();
    }

    public static function eliminar($id) {
        $pdo = Conexion::conectar();
        $consulta = $pdo->prepare("DELETE FROM productos WHERE id = ?");
        $consulta->execute([$id]);
        return $consulta->rowCount();
    }
}

echo "Rodolfo";