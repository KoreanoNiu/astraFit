<?php 

    session_start();
    $cadena = "Carlos Humberto dasasd pruebass Hola mundo@. robocharley.lego@gmail.com''''''==='asdas ó,á,í,é,ú''''asd//?'']";    

    $var = preg_replace("/[^A-Za-z0-9^$|\s+^@^.^áéíóúÁÉÍÓÚñÑ]/", '', $cadena);

    echo $var;
    
    echo '<br>' . $_SESSION['id_usuario'];
    
    /* foreach ($data[0] as $dato) {
        echo $dato;
    } */

    /*
        $session_start();

    include_once('php/database.php');
    $conexion = Conexion::Conectar();

    $result = $conexion->prepare('SELECT * FROM usuarios');
    $result->execute();
    $data = $result->fetchAll(PDO::FETCH_ASSOC);
    
    var_dump($data);
    // echo ($data[0]['id']);

    $nombre = $data[0]['nombre'];
    $edad = $data[0]['edad'];
    $peso = $data[0]['peso'];
    $altura = $data[0]['altura'];
    $IMC = $data[0]['IMC'];

    echo $nombre, $edad, $peso, $altura, $IMC;

    foreach ($data as $key){
    
        echo $key['nombre'];
    }

    echo $_SESSION['id_usuario'];
    
    


    $query = 'SELECT * FROM usuarios';
    $result = mysqli_query($conn, $query);
    $arraydb = array();
    
    foreach ($result as $key) {
        $arraydb = $key;
    }
    
    echo json_encode($arraydb);
    */

    /* if(isset($_POST['nombreUsuario'])) {
        $query = "INSERT INTO usuarios (nombre, email, password, unidadAltura, unidadPeso, fecha, altura, peso, genero, objetivo, nivel) VALUES (:nombre, :email, :password, :unidadAltura, :unidadPeso, :fecha, :altura, :peso, :genero, :objetivo, :nivel)";
        $result = $conexion->prepare($query);

        $result->bindParam(':nombre', $_POST['nombreUsuario']);
        $result->bindParam(':email', $_POST['email']);
        $result->bindParam(':password', $_POST['contrasena']);
        $result->bindParam(':unidadAltura', $_POST['unidadAltura']);
        $result->bindParam(':unidadPeso', $_POST['unidadPeso']);
        $result->bindParam(':fecha', $_POST['fecha']);
        $result->bindParam(':altura', $_POST['altura']);
        $result->bindParam(':peso', $_POST['peso']);
        $result->bindParam(':genero', $_POST['genero']);
        $result->bindParam(':objetivo', $_POST['objetivo']);
        $result->bindParam(':nivel', $_POST['nivel']);

        $result->execute();
    }

    setTimeout(function(){
        window.location.replace("/astraFit/miprogreso.php");
    }, 5000); */
?>