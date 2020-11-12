<?php
    session_start();

    if(isset($_POST['nombreUsuario'])){
        include_once('database.php');
        $conexion = Conexion::Conectar();

        $query = "INSERT INTO usuarios (nombre, email, password, unidadAltura, unidadPeso, edad, altura, peso, genero, objetivo, nivel) VALUES (:nombre, :email, :password, :unidadAltura, :unidadPeso, :edad, :altura, :peso, :genero, :objetivo, :nivel)";
        $result = $conexion->prepare($query);

        $data = [
            ":nombre" => Conexion::sanitizarVariables($_POST['nombreUsuario']),
            ":email" => Conexion::sanitizarVariables($_POST['email']),
            ":password" => md5(md5($_POST['contrasena'])),
            ":unidadAltura" => Conexion::sanitizarVariables($_POST['unidadAltura']),
            ":unidadPeso" => Conexion::sanitizarVariables($_POST['unidadPeso']),
            ":edad" => Conexion::sanitizarVariables($_POST['edad']),
            ":altura" => Conexion::sanitizarVariables($_POST['altura']),
            ":peso" => Conexion::sanitizarVariables($_POST['peso']),
            ":genero" => Conexion::sanitizarVariables($_POST['genero']),
            ":objetivo" => Conexion::sanitizarVariables($_POST['objetivo']),
            ":nivel" => Conexion::sanitizarVariables($_POST['nivel'])
        ];

        $result->execute($data);

        $query = "SELECT id_usuario FROM usuarios WHERE email=?";
        $result = $conexion->prepare($query);
        $result->execute([$_POST['email']]);
        $dataId = $result->fetchAll(PDO::FETCH_ASSOC);
        
        $_SESSION['id_usuario'] = $dataId[0]['id_usuario'];
        
        $json = array(
            "error" => '',
        );

    }else{
        $json = array(
            'error' => 'No se pudo procesar tu solicitud'
        );
    }

    echo json_encode($json);
?>