<?php
    $uploadDir = "../users/uploads-progress-images/" . uniqid() . '.jpg';
    header('Content-Type: application/json');
    
    $fechaCreacion = $_POST['fechaCreacion'];

    $json = array(
        "uploadDir" => $uploadDir,
        "fechaCreacion" => $fechaCreacion 
    );
    echo json_encode($json);
    
    move_uploaded_file($_FILES['image']['tmp_name'], $uploadDir);
?>