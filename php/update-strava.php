<?php
    if(isset($_GET['code']) && isset($_GET['state']) && isset($_GET['scope']) && !isset($_SESSION['access_tokenStrava'])){
        include_once('database.php');
        session_start();
        $conexion = Conexion::Conectar();
        $funcionesDB = new funcionesDB;
        
        require 'strava-init.php';
        $api = new StravaApi(client_id, client_secret);
        $data = $api->obtainToken($_GET['code']);

        $data = json_decode($data, true);

        $stravaIdAthlete = $funcionesDB->authUsuario($conexion, $data['athlete']['id'], 'stravaIdAthlete');

        if (count($stravaIdAthlete) == 0) {
            $dataUser =[
                ':idUsuario' => $_SESSION['idUsuario'],
                ':data' => $data['athlete']['id']  
            ];
    
            $funcionesDB->actualizarDatos($conexion, 'stravaIdAthlete', 'usuarios', $dataUser);
    
            $_SESSION['access_tokenStrava'] = $data['access_token'];
            header('location: ../respaldoMiProgreso.php');
        }else{
            header("location: ../respaldoMiProgreso.php?error='Esta cuenta de Strava ya está asociada a otra cuenta de AstraFit'");
        }

    }else{
        header('location: ../respaldoMiProgreso.php');
    }