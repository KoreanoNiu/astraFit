<?php

    if(isset($_POST['fechaCreacion'])){
        $uploadDir = "../users/uploads-progress-images/" . uniqid() . '.jpg';
        header('Content-Type: application/json');
        
        $fechaCreacion = $_POST['fechaCreacion'];
    
        $json = array(
            "uploadDir" => $uploadDir,
            "fechaCreacion" => $fechaCreacion, 
            "error" => ''
        );
        echo json_encode($json);
        
        move_uploaded_file($_FILES['image']['tmp_name'], $uploadDir);
    }else if(isset($_POST['urlAEliminar'])){
        unlink($_POST['urlAEliminar']);
    }
?>  