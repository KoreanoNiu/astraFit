<?php 
    session_start();
    
    include_once('php/database.php');
    $conexion = Conexion::Conectar();
    $funcionesDB = new funcionesDB;

    //Selecciona un Coach nutriologo para el usuario
    $idCoachNutriologo = $funcionesDB->obtenerIdCoach($conexion, 'Nutriologo');
    //Selecciona un Coach entrenador para el usuario
    $idCoachEntrenador = $funcionesDB->obtenerIdCoach($conexion, 'Entrenador');

    $data = [
        ":idCoachNutriologo" => $idCoachNutriologo[0]['idCoach'],
        ":idCoachEntrenador" => $idCoachEntrenador[0]['idCoach']
    ];

    $dataCoach = $funcionesDB->obtenerDatosCoaches($conexion, $data);

    echo $dataCoach[0]['nombre'] . '<br>';
    echo $dataCoach[0]['srcFotoPerfil'] . '<br>';
    echo $dataCoach[0]['tipoCoach'] . '<br>';
    echo $dataCoach[0]['descripcion'] . '<br>' . '<br>';

    echo $dataCoach[1]['nombre'] . '<br>';
    echo $dataCoach[1]['srcFotoPerfil'] . '<br>';
    echo $dataCoach[1]['tipoCoach'] . '<br>';
    echo $dataCoach[1]['descripcion'] . '<br>';
    //Acomodar la nueva version de la base de datos
    //Meterle esta putada del similudor al registro y mis datos
    //Jalar los datos de la dieta y calcularla
    //Darle toques finales
    //Incluir inicio de sesion con Facebook y Strava
    //Finalizar

?>