<?php 
    header('Content-Type: application/json');
    
    $email = $_POST['Correo'];
    $password = $_POST['Contrasena'];
    
    $json = array(
        "error" => ''
    );

    echo json_encode($json);
?>