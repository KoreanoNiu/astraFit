<?php
    session_start();

    include_once('database.php');
    $conexion = Conexion::Conectar();

    if(isset($_POST['fechaCreacion'])){
        $uploadDir = "../users/uploads-progress-images/" . uniqid() . '.jpg';
        header('Content-Type: application/json');
        
        $fechaCreacion = $_POST['fechaCreacion'];

        $sql = "INSERT INTO imagenes (id_usuario, src, fechaCreacion) VALUES (:id_usuario, :url, :fechaCreacion)";
        $result = $conexion->prepare($sql);

        $data = [
            ":id_usuario" => $_SESSION['id_usuario'],
            ":url" => $uploadDir,
            ":fechaCreacion" => $fechaCreacion,
        ];

        $result->execute($data);

        $json = array(
            "uploadDir" => $uploadDir,
            "fechaCreacion" => $fechaCreacion, 
            "error" => ''
        );
        echo json_encode($json);
        
        move_uploaded_file($_FILES['image']['tmp_name'], $uploadDir);
        
    }else if(isset($_POST['urlAEliminar'])){

        $sql = "DELETE FROM imagenes WHERE src=?";
        $result = $conexion->prepare($sql);
        $result->execute([$_POST['urlAEliminar']]);

        unlink($_POST['urlAEliminar']);
    }
?>  