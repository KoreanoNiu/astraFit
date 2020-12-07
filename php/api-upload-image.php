<?php
    if(isset($_POST['fechaCreacion'])){
        session_start();
        include_once('database.php');
        $conexion = Conexion::Conectar();
        $funcionesDB = new funcionesDB;
    
        $uploadDir = "../users/uploads-progress-images/" . uniqid() . '.jpg';
        header('Content-Type: application/json');
        
        $fechaCreacion = $_POST['fechaCreacion'];

        $data = [
            ":idUsuario" => $_SESSION['idUsuario'],
            ":url" => $uploadDir,
            ":fechaCreacion" => $fechaCreacion,
        ];

        $funcionesDB->insertarImagen($conexion, $data);

        $json = array(
            "uploadDir" => $uploadDir,
            "fechaCreacion" => $fechaCreacion, 
            "error" => ''
        );
        echo json_encode($json);
        
        move_uploaded_file($_FILES['image']['tmp_name'], $uploadDir);
        
    }else if(isset($_POST['urlAEliminar'])){
        session_start();
        include_once('database.php');
        $conexion = Conexion::Conectar();
        $funcionesDB = new funcionesDB;
        
        $funcionesDB->eliminarImagen($conexion, $_POST['urlAEliminar']);

        unlink($_POST['urlAEliminar']);
    }
?>  