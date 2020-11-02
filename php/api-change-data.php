<?php
    session_start();
    include_once('database.php');
    $conexion = Conexion::Conectar();

    if($_POST['nombre'] == 'Edad'){
        $sql = "UPDATE usuarios SET fecha=:edad WHERE id_usuario=:id_usuario";
        $result = $conexion->prepare($sql);

        $data = [
            ":edad" => $_POST['Edad'],
            ":id_usuario" => $_SESSION['id_usuario']
        ];

        $result->execute($data);
    }else if($_POST['nombre'] == 'Altura'){
        $sql = "UPDATE usuarios SET altura=:altura WHERE id_usuario=:id_usuario";
        $result = $conexion->prepare($sql);

        $data = [
            ":altura" => $_POST['Altura'],
            ":id_usuario" => $_SESSION['id_usuario']
        ];

        $result->execute($data);

    }else if($_POST['nombre'] == 'Peso'){
        $sql = "UPDATE usuarios SET peso=:peso WHERE id_usuario=:id_usuario";
        $result = $conexion->prepare($sql);

        $data = [
            ":peso" => $_POST['Peso'],
            ":id_usuario" => $_SESSION['id_usuario']
        ];

        $result->execute($data);
    }

    $json = array(
        "error" => '',
    );

    echo json_encode($json);
?>