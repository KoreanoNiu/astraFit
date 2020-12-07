<?php 
    session_start();

    if(isset($_POST['email'])){
        include_once('database.php');
        $conexion = Conexion::Conectar();
        $funcionesDB = new funcionesDB;
        $query = "SELECT password FROM usuarios WHERE email=?";
        $result = $conexion->prepare($query);
        $result->execute([$funcionesDB->sanitizarVariables($_POST['email'])]);
        $passwordSQL = $result->fetchAll(PDO::FETCH_ASSOC);

        if(count($passwordSQL) == 0){
            $json = array(
                "error" => 'El email introducido no es valido'
            );
        }else{
            if ($passwordSQL[0]['password'] != md5(md5($_POST['contrasena']))) {
                $json = array(
                    "error" => 'Contraseña equivocada, vuelve a introducirla'
                );
    
            }else{
                session_unset();

                $dataUser = $funcionesDB->obtenerDatosUsuario($conexion, $_POST['email']);

                $_SESSION['idUsuario'] = $dataUser[0]['idUsuario'];
                $_SESSION['nombreUsuario'] = $dataUser[0]['nombre'];
                $_SESSION['rol'] = $dataUser[0]['tipoUsuario'];
                $_SESSION['srcFotoPerfil'] = $dataUser[0]['srcFotoPerfil'];

                if ($dataUser[0]['stravaIdAthlete'] != '') {
                    $_SESSION['access_tokenStrava'] = $dataUser[0]['stravaIdAthlete'];
                }

                $json = array(
                    "error" => ''
                );
            }
        }

        echo json_encode($json);
    }else{
        if (isset($_GET['code']) && isset($_GET['state']) && isset($_GET['scope']) && !isset($_GET['error'])){
            include_once('database.php');

            $conexion = Conexion::Conectar();
            $funcionesDB = new funcionesDB;

            require 'strava-init.php';

            $api = new StravaApi(client_id, client_secret);

            $data = $api->obtainToken($_GET['code']);

            $data = json_decode($data, true);

            $stravaIdAthlete = $funcionesDB->authUsuario($conexion, $data['athlete']['id'], 'stravaIdAthlete');

            if (isset($stravaIdAthlete[0]['stravaIdAthlete'])) {
                if ($stravaIdAthlete[0]['stravaIdAthlete'] == $data['athlete']['id']) {
                    $dataUser = $funcionesDB->obtenerDatosUsuario($conexion, $data['athlete']['id'], 'stravaIdAthlete');
                        
                    $_SESSION['idUsuario'] = $dataUser[0]['idUsuario'];
                    $_SESSION['nombreUsuario'] = $dataUser[0]['nombre'];
                    $_SESSION['rol'] = $dataUser[0]['tipoUsuario'];
                    $_SESSION['srcFotoPerfil'] = $data['athlete']['profile'];
                    $_SESSION['access_tokenStrava'] = $data['access_token'];

                    header('Location: ../respaldoMiProgreso.php');
                }else{
                    session_destroy();
                    header('Location: ../registro.php');
                }
            }else{
                session_destroy();
                header('Location: ../registro.php');
            }
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
                if (isset($accessToken)) {

                    $res = $fb->get("/me?fields=email, picture.width(720).height(720)", $accessToken);
                    $user = $res->getGraphUser();
                
                    $token = $funcionesDB->authUsuario($conexion, $user['email'], 'email');

                    if (isset($token[0]['email'])) {
                        if ($token[0]['email'] == $user['email']) {
                            $dataUser = $funcionesDB->obtenerDatosUsuario($conexion, $user['email']);
                        
                            $_SESSION['idUsuario'] = $dataUser[0]['idUsuario'];
                            $_SESSION['nombreUsuario'] = $dataUser[0]['nombre'];
                            $_SESSION['rol'] = $dataUser[0]['tipoUsuario'];
                            $_SESSION['srcFotoPerfil'] = $user['picture']['url'];
                            $_SESSION['access_token'] = (string)$accessToken;

                            if ($dataUser[0]['stravaIdAthlete'] != '') {
                                $_SESSION['access_tokenStrava'] = $dataUser[0]['stravaIdAthlete'];
                            }            
                        
                            header('Location: ../respaldoMiProgreso.php');
                        }else{
                            session_destroy();
                            header('Location: ../registro.php');
                        }
                    }else{
                        session_destroy();
                        header('Location: ../registro.php');
                    }
                }
                }catch(Exception $e){
                    echo $e->getTraceAsString();
                }

            if (!isset($accessToken)) {
                if (!isset($_POST)) {
                    header('Location: ../login.php');
                }else{
                    header('Location: ../login.php');
                }
              }
        }
    }
?>
