<?php 

    class Conexion{
        public static function Conectar(){
            define('servidor', 'localhost');
            define('nombre_bd', 'astrafit');
            define('usuario', 'root');
            define('password', '');

            try {
                $conexion = new PDO("mysql:host=" . servidor ."; dbname=" . nombre_bd, usuario, password);
                return $conexion;
            } catch (Exception $e) {
                die("El error de Conexion es: " . $e->getMessage());
            }
        }
    }

?>