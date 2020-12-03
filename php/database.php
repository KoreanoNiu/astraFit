<?php 

    class Conexion{
        public static function Conectar(){
            define('servidor', 'localhost');
            define('nombre_bd', 'astrafitdbv5');
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

    class funcionesDB extends Conexion{
        public function sanitizarVariables($var){
            return preg_replace("/[^A-Za-z0-9^$|\s+^@^.^áéíóúÁÉÍÓÚñÑ]/", '', $var);
        }
        public function obtenerDatosCompletos($conexion, $data){
            $query = "SELECT usuarios.tipoUsuario, 
                clientes.unidadAltura, clientes.unidadPeso, clientes.edad, clientes.peso, clientes.altura, clientes.objetivo, clientes.nivel, clientes.lesiones, 
                clientes.porcentajeGrasa, clientes.tipoDieta, clientes.tipoFormula,clientes.idCoachNutriologo, clientes.idCoachEntrenador 
                from usuarios 
                JOIN clientes ON clientes.idUsuario = usuarios.idUsuario 
                WHERE usuarios.idUsuario=?";
            $result = $conexion->prepare($query);
            $result->execute([$data]);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
        public function obtenerDatosUsuario($conexion, $data, $campo = 'email'){
            $query = "SELECT idUsuario, nombre, tipoUsuario, srcFotoPerfil, stravaIdAthlete FROM usuarios WHERE $campo=?";
            $result = $conexion->prepare($query);
            $result->execute([$data]);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
        public function obtenerIdCoach($conexion, $tipoCoach){
            $query = "SELECT coaches.idCoach AS 'idCoach' FROM coaches WHERE tipoCoach = '$tipoCoach' ORDER BY RAND() LIMIT 1";
            $result = $conexion->prepare($query);
            $result->execute();
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
        public function obtenerIdUsuario($conexion, $data){
            $query = "SELECT idUsuario FROM usuarios WHERE email=?";
            $result = $conexion->prepare($query);
            $result->execute([$data]);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
        public function authUsuario($conexion, $data, $campo){
            $query = "SELECT $campo FROM usuarios WHERE $campo=?";
            $result = $conexion->prepare($query);
            $result->execute([$data]);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
        public function obtenerDatosCoaches($conexion, $data){
            $query = "SELECT usuarios.nombre, usuarios.srcFotoPerfil, usuarios.email, coaches.descripcion, coaches.tipoCoach 
                from usuarios 
                JOIN coaches ON coaches.idCoach = usuarios.idUsuario 
                WHERE coaches.idCoach=:idCoachNutriologo OR coaches.idCoach = :idCoachEntrenador";
            $result = $conexion->prepare($query);
            $result->execute($data);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
        public function insertarDatosUsuario($conexion, $data){
            $query = "INSERT INTO usuarios (nombre, email, password, tipoUsuario, srcFotoPerfil, stravaIdAthlete) VALUES (:nombre, :email, :password, :tipoUsuario, :src, :stravaIdAthlete)";
            $result = $conexion->prepare($query);
            $result->execute($data);  
        }
        public function insertarDatosCliente($conexion, $data){
            $query = "INSERT INTO clientes (idUsuario, unidadAltura, unidadPeso, edad, altura, peso, genero, objetivo, nivel, lesiones, porcentajeGrasa, tipoDieta, tipoFormula, idCoachNutriologo, idCoachEntrenador) 
            VALUES (:idUsuario, :unidadAltura, :unidadPeso, :edad, :altura, :peso, :genero, :objetivo, :nivel, :lesiones, :porcentajeGrasa, :tipoDieta, :tipoFormula, :idCoachNutriologo, :idCoachEntrenador)";
            $result = $conexion->prepare($query);
            $result->execute($data);
        }
        public function insertarDatosCoach($conexion, $data){
            $query = "INSERT INTO coaches (idCoach, tipoCoach, descripcion) VALUES (:idCoach, :tipoCoach, :descripcion)";
            $result = $conexion->prepare($query);
            $result->execute($data);
        }
        public function actualizarDatos($conexion, $campo, $tabla, $data){
            $query = "UPDATE $tabla SET $campo=:data WHERE idUsuario=:idUsuario";
            $result = $conexion->prepare($query);
            $result->execute($data);
        }
        public function actualizarFotoDePerfil($conexion, $data){
            $sql = "UPDATE usuarios SET srcFotoPerfil =:srcFotoPerfil WHERE idUsuario=:idUsuario";
            $result = $conexion->prepare($sql);
            $result->execute($data);
        }
        public function insertarImagen($conexion, $data){
            $query = "INSERT INTO imagenes (idUsuario, src, fechaCreacion) VALUES (:idUsuario, :url, :fechaCreacion)";
            $result = $conexion->prepare($query);
            $result->execute($data);
        }
        public function eliminarImagen($conexion, $data){
            $query = "DELETE FROM imagenes WHERE src=?";
            $result = $conexion->prepare($query);
            $result->execute([$data]);
        }
        public function obtenerImagenes($conexion, $data){
            $result = $conexion->prepare('SELECT src, fechaCreacion FROM imagenes WHERE idUsuario=?');
            $result->execute([$data]);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
        public function obtenerFotoDePerfil($conexion, $data){
            $query = "SELECT srcFotoPerfil FROM usuarios WHERE idUsuario=?";
            $result = $conexion->prepare($query);
            $result->execute([$data]);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        } 
        //ejemmplo obtener los niveles o entrenamientos posibles, etc
        public function obtenerDatosComunes($conexion, $campo, $tabla, $data){
            $result = $conexion->prepare("SELECT $campo FROM $tabla WHERE $campo!=?");
            $result->execute([$data]);
            return $result->fetchAll(PDO::FETCH_ASSOC);
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