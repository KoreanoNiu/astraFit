<?php 
    include_once('php/database.php');

    $conexion = Conexion::Conectar();
    $nombre = 'invitado';
    $edad = 35;
    $peso = 65;
    $altura = 170;
    $IMC = 22.49;

    $query = 'SELECT * FROM usuarios';
    $result = $conexion->query($query);
    echo $result;

?>