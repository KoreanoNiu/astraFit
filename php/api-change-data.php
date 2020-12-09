<?php
    if(isset($_POST['nombre']) && !empty($_POST[$_POST['nombre']])){
        session_start();
        include_once('database.php');
        $conexion = Conexion::Conectar();
        $funcionesDB = new funcionesDB;
        
        $var = $funcionesDB->sanitizarVariables($_POST['nombre']);

        $data = [
            ":data" => $funcionesDB->sanitizarVariables($_POST[$var]),
            ":idUsuario" => $_SESSION['idUsuario']
        ];

        if ($var == 'Nombre') {
            $_SESSION['nombreUsuario'] = $funcionesDB->sanitizarVariables($_POST[$var]);
            $tabla = 'usuarios';
        }else{
            $tabla = 'clientes';

            if (!$var == 'tipoDieta' || !$var == 'tipoFormula' || !$var == 'porcentajeGrasa'){
                $var = strtolower($var);
            }
        }

        $funcionesDB->actualizarDatos($conexion, $var, $tabla, $data);
        
        $json = array(
            "error" => '',
        );
    }else{
        $json = array(
            "error" => 'Hubo un error al procesar tu petición',
        );
    
    }
    echo json_encode($json);
?>