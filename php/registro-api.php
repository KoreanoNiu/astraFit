<?php

    include_once('database.php');
    $conexion = Conexion::Conectar();

    if(isset($_POST['nombreUsuario'])) {
        $query = "INSERT INTO usuarios (nombre, email, password, unidadAltura, unidadPeso, fecha, altura, peso, genero, objetivo, nivel) VALUES (:nombre, :email, :password, :unidadAltura, :unidadPeso, :fecha, :altura, :peso, :genero, :objetivo, :nivel)";
        $result = $conexion->prepare($query);

        $data = [
            ":nombre" => $_POST['nombreUsuario'],
            ":email" => $_POST['email'],
            ":password" => $_POST['contrasena'],
            ":unidadAltura" => $_POST['unidadAltura'],
            ":unidadPeso" => $_POST['unidadPeso'],
            ":fecha" => $_POST['fecha'],
            ":altura" => $_POST['altura'],
            ":peso" => $_POST['peso'],
            ":genero" => $_POST['genero'],
            ":objetivo" => $_POST['objetivo'],
            ":nivel" => $_POST['nivel']
        ];

        $result->execute($data);

        $query = "SELECT id_usuario FROM usuarios WHERE email=?";
        $result = $conexion->prepare($query);
        $result->execute([$_POST['email']]);
        $dataId = $result->fetchAll(PDO::FETCH_ASSOC);
        
        $_SESSION['id_usuario'] = $dataId[0]['id_usuario'];
    }
?>