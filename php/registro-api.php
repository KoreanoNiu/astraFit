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
            ":porcentajeGrasa" => 0,
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
        require 'vendor/autoload.php';
        include_once 'database.php';
        $conexion = Conexion::Conectar();
        $funcionesDB = new funcionesDB;

        $fb = new Facebook\Facebook([
            'app_id' => '2845414085689395',
            'app_secret' => '4bf2c79bcee711a900a6cb4343237bef',
            'default_graph_version' => 'v3.1'
        ]);

        $helper = $fb->getRedirectLoginHelper();

        try {
          $accessToken = $helper->getAccessToken();
          if (isset($accessToken)){
              $_SESSION['access_token'] = (string)$accessToken;

              $res = $fb->get("/me?fields=id,name,email,picture.width(720).height(720),gender,age_range", $accessToken);
              $user = $res->getGraphUser();

              $data = [
                  ":nombre" => $user['name'],
                  ":email" => $user['email'],
                  ":password" => $_SESSION['access_token'],
                  ":tipoUsuario" => 'usuario',
                  ":src" => $user['picture']['url'],
              ];
              
              try {
                  $funcionesDB->insertarDatosUsuario($conexion, $data);
              } catch (Exception $e) {
                if (isset($e)) {
                    session_destroy();
                    header("Location: ../registro.php?error=Ya hay una cuenta asociada con esa cuenta de Facebook.");
                }
              }
          
              $dataUser = $funcionesDB->obtenerDatosUsuario($conexion, $user['email']);
          
              $_SESSION['idUsuario'] = $dataUser[0]['idUsuario'];
              $_SESSION['nombreUsuario'] = $dataUser[0]['nombre'];
              $_SESSION['rol'] = $dataUser[0]['tipoUsuario'];
              $_SESSION['srcFotoPerfil'] = $dataUser[0]['srcFotoPerfil'];
          
              $idCoachNutriologo = $funcionesDB->obtenerIdCoach($conexion, 'Nutriologo');
          
              $idCoachEntrenador = $funcionesDB->obtenerIdCoach($conexion, 'Entrenador');
          
              $data = [
                ":idUsuario" => $dataUser[0]['idUsuario'],
                ":unidadAltura" => 'cm',
                ":unidadPeso" => 'kg',
                ":edad" => $user['min'],
                ":altura" => null,
                ":peso" => null,
                ":genero" => $user['gender'],
                ":objetivo" => null,
                ":nivel" => null,
                ":lesiones" => 0,
                ":porcentajeGrasa" => null,
                ":idCoachNutriologo" => $idCoachNutriologo[0]['idCoach'],
                ":idCoachEntrenador" => $idCoachEntrenador[0]['idCoach']
            ];
        
              $funcionesDB->insertarDatosCliente($conexion, $data);
        
              header('Location: ../respaldoMiProgreso.php');
          }
          }catch(Exception $e){
              echo $e->getTraceAsString();
          }
          
          if (! isset($accessToken)) {
            if (isset($_POST)) {
                $json = array(
                    'error' => 'No se pudo procesar tu solicitud'
                );
                session_destroy();
                header('Location: ../registro.php');
            } else {
                $json = array(
                    'error' => 'No se pudo procesar tu solicitud'
                );
            }
          }
    }

    echo json_encode($json);
