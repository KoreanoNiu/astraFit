<?php 
    if(isset($_POST['Titulo'])){
        session_start();
        include_once('database.php');
        $conexion = Conexion::Conectar();
        $funcionesDB = new funcionesDB;

        $data = [
            ":idUsuario" => $_SESSION['idUsuario'],
            ":titulo" => $_POST['Titulo'],
            ":descripcion" => $_POST['Descripcion'],
            ":contenido" => $_POST['Contenido']
        ];
        $idNota = $funcionesDB->insertarDatosNota($conexion, $data);
        $data = [
            "titulo" => $_POST['Titulo'],
            "descripcion" => $_POST['Descripcion'],
            "contenido" => $_POST['Contenido'],
            "idNota" => $idNota[0]['idNota'],
            "error" => ''
        ];
        echo json_encode($data);

    }else if(isset($_POST['peticion'])){
        session_start();
        include_once('database.php');
        $conexion = Conexion::Conectar();
        $funcionesDB = new funcionesDB;

        if ($_POST['peticion'] == 'editarElemento') {
            $var = $_POST['nombre'];

            $data = [
                ':idNota' => $_POST['idNota'],
                ":dataCampo" => $_POST[$var]
            ];
            
            $funcionesDB->actualizarDatosNotas($conexion, strtolower($var), 'notas', $data);

            echo json_encode($var);

        }else{
            $data = [
                ':idUsuario' => $_SESSION['idUsuario'],
                ':idNota' => $_POST['idNota']
            ];
    
            $funcionesDB->eliminarNotaUsuario($conexion, $data);
        }
    }
    else{
        header('location: blockNotas.php');
    }

?>