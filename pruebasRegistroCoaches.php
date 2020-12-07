<?php 

    session_start();
    include_once('php/database.php');

    $conexion = Conexion::Conectar();
    $funcionesDB = new funcionesDB;

        //Inserta los datos comunes del Coach
        $data = [
            ":nombre" => 'Hugo',
            ":email" => 'hugo@gmail.com',
            ":password" => md5(md5('123')),
            ":tipoUsuario" => 'coach',
            ":src" => '../users/perfil-image/user-default.png',
        ];
    
        $funcionesDB->insertarDatosUsuario($conexion, $data);
    
        //Obtiene el idUsuario del Coach
        $dataUser = $funcionesDB->obtenerIdUsuario($conexion, 'hugo@gmail.com');
        
        //Insertar los datos especificos del coach
        $data = [
            ":idCoach" => $dataUser[0]['idUsuario'],
            ":tipoCoach" => 'Entrenador',
            ":descripcion" => 'Hola soy Hugo el chido y con mi ayuda lo podras lograr xd'
        ];
    
        $funcionesDB->insertarDatosCoach($conexion, $data);
        
        //Inserta los datos del cliente del Coach
        $data = [
            ":idUsuario" => $dataUser[0]['idUsuario'],
            ":unidadAltura" => 'cm',
            ":unidadPeso" => 'kg',
            ":edad" => null,
            ":altura" => null,
            ":peso" => null,
            ":genero" => 'masculino',
            ":objetivo" => null,
            ":nivel" => null,
            ":lesiones" => null,
            ":porcentajeGrasa" => null,
            ":idCoachNutriologo" => null,
            ":idCoachEntrenador" => null
        ];

        $funcionesDB->insertarDatosCliente($conexion, $data);
?>