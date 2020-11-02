<?php 
    include_once('database.php');
    $conexion = Conexion::Conectar();

    if($_POST['nombre'] == 'Edad'){
        $return = $_POST['Edad'];
        $sql = "UPDATE usuarios SET edad=? WHERE nombre='Carlos'";
        $result = $conexion->prepare($sql);
        $result->execute([$return]);
    }else if($_POST['nombre'] == 'Altura'){
        $return = $_POST['Altura'];
        $sql = "UPDATE usuarios SET altura=? WHERE nombre='Carlos'";
        $result = $conexion->prepare($sql);
        $result->execute([$return]);

    }else if($_POST['nombre'] == 'Peso'){
        $return = $_POST['Peso'];
        $sql = "UPDATE usuarios SET peso=? WHERE nombre='Carlos'";
        $result = $conexion->prepare($sql);
        $result->execute([$return]);
    }else{
        $return = '';
    }
    
    $json = array(
        "error" => '',
        $_POST['nombre'] => $return,
    );

    echo json_encode($json);
?>