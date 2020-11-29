<?php
    session_start();

    if(isset($_POST['nombreUsuario'])){
        include_once('database.php');
        $conexion = Conexion::Conectar();
        $funcionesDB = new funcionesDB;

        //Insert a la tabla de usuarios, datos en comun de los usuarios
        $data = [
            ":nombre" => $funcionesDB->sanitizarVariables($_POST['nombreUsuario']),
            ":email" => $funcionesDB->sanitizarVariables($_POST['email']),
            ":password" => md5(md5($_POST['contrasena'])),
            ":tipoUsuario" => 'usuario',
            ":src" => '../users/perfil-image/user-default.png',
        ];

        $funcionesDB->insertarDatosUsuario($conexion, $data);

        
        //Trae datos utiles al session
        $dataUser = $funcionesDB->obtenerDatosUsuario($conexion, $_POST['email']);

        $_SESSION['idUsuario'] = $dataUser[0]['idUsuario'];
        $_SESSION['nombreUsuario'] = $dataUser[0]['nombre'];
        $_SESSION['rol'] = $dataUser[0]['tipoUsuario'];
        $_SESSION['srcFotoPerfil'] = $dataUser[0]['srcFotoPerfil'];

        //Selecciona un Coach nutriologo para el usuario
        $idCoachNutriologo = $funcionesDB->obtenerIdCoach($conexion, 'Nutriologo');

        //Selecciona un Coach entrenador para el usuario
        $idCoachEntrenador = $funcionesDB->obtenerIdCoach($conexion, 'Entrenador');

        //Insert a la tabla Clientes, datos utiles para la dieta, etc...
        $data = [
            ":idUsuario" => $dataUser[0]['idUsuario'],
            ":unidadAltura" => $funcionesDB->sanitizarVariables($_POST['unidadAltura']),
            ":unidadPeso" => $funcionesDB->sanitizarVariables($_POST['unidadPeso']),
            ":edad" => $funcionesDB->sanitizarVariables($_POST['edad']),
            ":altura" => $funcionesDB->sanitizarVariables($_POST['altura']),
            ":peso" => $funcionesDB->sanitizarVariables($_POST['peso']),
            ":genero" => $funcionesDB->sanitizarVariables($_POST['genero']),
            ":objetivo" => $funcionesDB->sanitizarVariables($_POST['objetivo']),
            ":nivel" => $funcionesDB->sanitizarVariables($_POST['nivel']),
            ":lesiones" => 0,
            ":porcentajeGrasa" => 12,
            ":tipoDieta" => null,
            ":tipoFormulaDieta" => null,
            ":idCoachNutriologo" => $idCoachNutriologo[0]['idCoach'],
            ":idCoachEntrenador" => $idCoachEntrenador[0]['idCoach']
        ];

        $funcionesDB->insertarDatosCliente($conexion, $data);

        $json = array(
            "error" => '',
        );

    }else{
        $json = array(
            'error' => 'No se pudo procesar tu solicitud'
        );
    }

    echo json_encode($json);
?>