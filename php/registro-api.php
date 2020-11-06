<?php
    session_start();
    include_once('database.php');
    $conexion = Conexion::Conectar();

    if(isset($_POST['nombreUsuario'])){

        $query = "INSERT INTO usuarios (nombre, email, password, unidadAltura, unidadPeso, edad, altura, peso, genero, objetivo, nivel) VALUES (:nombre, :email, :password, :unidadAltura, :unidadPeso, :edad, :altura, :peso, :genero, :objetivo, :nivel)";
        $result = $conexion->prepare($query);

        $data = [
            ":nombre" => preg_replace("/[^A-Za-z0-9^$|\s+^áéíóúÁÉÍÓÚñÑ]/", '', $_POST['nombreUsuario']),
            ":email" => preg_replace("/[^A-Za-z0-9^$|\s+^@^.^áéíóúÁÉÍÓÚñÑ]/", '', $_POST['email']),
            ":password" => md5(md5($_POST['contrasena'])),
            ":unidadAltura" => preg_replace("/[^A-Za-z0-9]/", '', $_POST['unidadAltura']),
            ":unidadPeso" => preg_replace("/[^A-Za-z0-9]/", '',$_POST['unidadPeso']),
            ":edad" => preg_replace("/[^A-Za-z0-9]/", '', $_POST['edad']),
            ":altura" => preg_replace("/[^A-Za-z0-9]/", '', $_POST['altura']),
            ":peso" => preg_replace("/[^A-Za-z0-9]/", '', $_POST['peso']),
            ":genero" => preg_replace("/[^A-Za-z0-9]/", '', $_POST['genero']),
            ":objetivo" => preg_replace("/[^A-Za-z0-9^$|\s+]/", '', $_POST['objetivo']),
            ":nivel" => preg_replace("/[^A-Za-z0-9^$|\s+]/", '', $_POST['nivel'])
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