<?php 

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

    /* foreach ($data[0] as $dato) {
        echo $dato;
    } */

    /* 
    $query = 'SELECT * FROM usuarios';
    $result = mysqli_query($conn, $query);
    $arraydb = array();
    
    foreach ($result as $key) {
        $arraydb = $key;
    }
    
    echo json_encode($arraydb);
    */
?>