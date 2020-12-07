<?php 
    session_start();
    include_once('database.php');


    if ($_POST['token'] == 'entrenamiento') {
        $conexion = Conexion::Conectar();
        $funcionesDB = new funcionesDB;
        $data = $funcionesDB->obtenerDatoEspecifico($conexion, 'nivel', 'clientes', $_SESSION['idUsuario']);

    }else if ($_POST['token'] == 'dieta') {
        $conexion = Conexion::Conectar();
        $funcionesDB = new funcionesDB;

        $data = $funcionesDB->obtenerDatosParaDieta($conexion, $_SESSION['idUsuario']);
    }

    echo json_encode($data);
?>