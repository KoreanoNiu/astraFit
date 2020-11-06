<?php 

    class Conexion{
        public static function Conectar(){
            define('servidor', 'localhost');
            define('nombre_bd', 'astrafitdb');
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
    /* 

    define('servidor', 'bynxgl7z5woudf4e3x46-mysql.services.clever-cloud.com');
    define('nombre_bd', 'bynxgl7z5woudf4e3x46');
    define('usuario', 'uuxgfurh3jclp53w');
    define('password', 'sDjvkuahGJPgJYpJB7L2');


    define('servidor', 'localhost');
    define('nombre_bd', 'astrafitdb');
    define('usuario', 'root');
    define('password', '');

    */
?>