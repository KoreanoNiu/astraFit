<?php
    if(isset($_POST['nombre'])){
        session_start();
        include_once('database.php');
        $conexion = Conexion::Conectar();
        
        $var = preg_replace("/[^A-Za-z0-9]/", '', $_POST['nombre']);
    
        $sql = "UPDATE usuarios SET " . strtolower($var) ."=:data WHERE id_usuario=:id_usuario";
        $result = $conexion->prepare($sql);
    
        $data = [
            ":data" => $_POST[$var],
            ":id_usuario" => $_SESSION['id_usuario']
        ];
    
        $result->execute($data);
        
        $json = array(
            "error" => '',
        );
    }else{
        $json = array(
            "error" => 'Hubo un error al procesar tu petición',
        );
    
    }

    echo json_encode($json);
?>