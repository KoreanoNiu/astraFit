<?php 
    if(isset($_POST)){
        session_start();
        include_once('database.php');
        $conexion = Conexion::Conectar();
        $funcionesDB = new funcionesDB;
        
        if ($_SESSION['srcFotoPerfil'] != '../users/perfil-image/user-default.png') {
            unlink($_SESSION['srcFotoPerfil']);
        }
        $uploadDir = "../users/perfil-image/" . uniqid() . '.jpg';
        $_SESSION['srcFotoPerfil'] = $uploadDir;
        header('Content-Type: application/json');
        
        $data = [
            ":srcFotoPerfil" => $_SESSION['srcFotoPerfil'],
            ":idUsuario" => $_SESSION['idUsuario']
        ];

        $funcionesDB->actualizarFotoDePerfil($conexion, $data);

        $json = array(
            "srcFotoPerfil" => $uploadDir,
            "error" => ''
        );
        echo json_encode($json);
        
        move_uploaded_file($_FILES['image-perfil']['tmp_name'], $uploadDir);
    }
?>