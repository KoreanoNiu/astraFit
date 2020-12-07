<?php 
    session_start();
    include_once('database.php');
    $conexion = Conexion::Conectar();
    $funcionesDB = new funcionesDB;

    $data = $funcionesDB->obtenerDatoEspecifico($conexion, 'nivel', 'clientes', $_SESSION['idUsuario']);

    echo json_encode($data);
?>