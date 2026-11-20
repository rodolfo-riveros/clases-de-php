<?php

class Conexion{
    //atributos
    const HOST = "localhost";
    const BD = "tienda";
    const USER = "root";
    const PASSWORD = "";

    //metodo conectar

    public static function conectar(){
        $pdo = new PDO("mysql:host=" . self::HOST . ";dbname=" . self::BD . ";charset=utf8mb4", self::USER, self::PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

}

$pdo = Conexion::conectar(); 