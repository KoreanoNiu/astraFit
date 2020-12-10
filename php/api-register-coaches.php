<?php 

    if (isset($_POST['nombre'])) {
        include_once('database.php');
        $conexion = Conexion::Conectar();
        $funcionesDB = new funcionesDB;
    
    
        if ($_FILES['photo-coach']['tmp_name'] == ""){
            $url = '../users/perfil-image/user-default.png';
        }else{
            $url = "../users/perfil-image/" . uniqid() . '.jpg';
    
            move_uploaded_file($_FILES['photo-coach']['tmp_name'], $url);
        }
    
        $data = [
            ":nombre" => $funcionesDB->sanitizarVariables($_POST['nombre']),
            ":email" => $funcionesDB->sanitizarVariables($_POST['email']),
            ":password" => md5(md5($_POST['contrasena'])),
            ":tipoUsuario" => 'coach',
            ":src" => $url,
            ":stravaIdAthlete" => ''
        ];
    
        $funcionesDB->insertarDatosUsuario($conexion, $data);
    
        $idUsuarioCoach = $funcionesDB->obtenerIdUsuario($conexion, $_POST['email']);
    
        $data = [
            ":idCoach" => $idUsuarioCoach[0]['idUsuario'],
            ":tipoCoach" => $_POST['tipoCoach'],
            ":descripcion" => $_POST['Descripcion']
        ];
    
        $funcionesDB->insertarDatosCoach($conexion, $data);
    
        $data = [
            ":idUsuario" => $idUsuarioCoach[0]['idUsuario'],
            ":unidadAltura" => 'cm',
            ":unidadPeso" => 'kg',
            ":edad" => null,
            ":altura" => null,
            ":peso" => null,
            ":genero" => $_POST['Genero'],
            ":objetivo" => '',
            ":nivel" => '',
            ":lesiones" => null,
            ":porcentajeGrasa" => null,
            ":tipoDieta" => '',
            ":tipoFormula" => '',
            ":idCoachNutriologo" => null,
            ":idCoachEntrenador" => null,
        ];
    
        $funcionesDB->insertarDatosCliente($conexion, $data);

        $data = [
            'error' => ''
        ];
    }else{
        $data = [
            'error' => 'Hubo un error al procesar tu peticion'
        ];
    }
    echo json_encode($data);
?>