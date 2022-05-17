<?php

class Conexion {

    public static function conectar(){

        //1) host;nombre base de datos
        //2) usuario
        //3) contraseña

        $db = new PDO("mysql:host=localhost;dbname=primera_app;charset=utf8",
        "root", 
        "");

        return $db; // bool
    }
}