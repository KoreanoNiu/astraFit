<?php 
    session_start();
    include_once('database.php');
    $conexion = Conexion::Conectar();
    $funcionesDB = new funcionesDB;

    if(isset($_POST['email'])){
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

                $json = array(
                    "error" => ''
                );
            }
        }

        echo json_encode($json);
    }
?>
