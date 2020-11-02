<?php 
    session_start();
    include_once('database.php');
    $conexion = Conexion::Conectar();

    if(isset($_POST['email'])){
        $query = "SELECT password FROM usuarios WHERE email=?";
        $result = $conexion->prepare($query);
        $result->execute([$_POST['email']]);
        $passwordSQL = $result->fetchAll(PDO::FETCH_ASSOC);

        if(count($passwordSQL) == 0){
            $json = array(
                "error" => 'El email introducido no es valido'
            );
        }else{
            if ($passwordSQL[0]['password'] != $_POST['contrasena']) {
                $json = array(
                    "error" => 'Contraseña equivocada, vuelve a introducirla'
                );
    
            }else{
                $query = "SELECT id_usuario FROM usuarios WHERE email=?";
                $result = $conexion->prepare($query);
                $result->execute([$_POST['email']]);
                $dataId = $result->fetchAll(PDO::FETCH_ASSOC);
                
                $json = array(
                    "error" => ''
                );
    
                $_SESSION['id_usuario'] = $dataId[0]['id_usuario'];
            }
        }

        echo json_encode($json);
    }
?>