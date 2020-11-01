<?php 
    header('Content-Type: application/json');
    
    if($_POST['nombre'] == 'Edad'){
        $return = $_POST['Edad'];
    }else if($_POST['nombre'] == 'Altura'){
        $return = $_POST['Altura'];
    }else if($_POST['nombre'] == 'Peso'){
        $return = $_POST['Peso'];
    }else{
        $return = '';
    }
    
    $json = array(
        "error" => '',
        $_POST['nombre'] => $return
    );

    echo json_encode($json);
?>