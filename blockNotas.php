<?php 
    session_start();

    if(isset($_SESSION['idUsuario']) && $_SESSION['idUsuario'] != ''){
        include_once('php/database.php');
        $conexion = Conexion::Conectar();
        $funcionesDB = new funcionesDB;
    
    
        $data = $funcionesDB->obtenerDatosCompletos($conexion, $_SESSION['idUsuario']);

        $rolUsuario = $data[0]['tipoUsuario'];
        $unidadAltura = $data[0]['unidadAltura'];
        $unidadPeso = $data[0]['unidadPeso'];
        $edad = $data[0]['edad'];
        $peso = $data[0]['peso'];
        $altura = $data[0]['altura'];
        $objetivo = $data[0]['objetivo'];
        $nivelEntrenamiento = $data[0]['nivel'];
        $lesiones = $data[0]['lesiones'];
        $porcentajeGrasa = $data[0]['porcentajeGrasa'];
        $tipoDieta = $data[0]['tipoDieta'];
        $tipoFormula = $data[0]['tipoFormula'];
        $idCoachNutriologo = $data[0]['idCoachNutriologo'];
        $idCoachEntrenador = $data[0]['idCoachEntrenador'];

        if ($altura != null && $peso != null && $altura != '' && $peso != '') {
            $IMC = number_format($peso / ($altura  / 100 * $altura / 100), 2);
        }

        if (!isset($_SESSION['access_tokenStrava'])) {
            require 'php/strava-init.php';
            define('redirect_url', 'http://localhost/astraFit/php/update-strava.php');
            
            //Strava Api
            $api = new StravaApi(client_id, client_secret);
            
            $urlAuthStrava = $api->authenticationUrl(redirect_url, approvalPrompt, scope);
        }

    }else{
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang = es>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href = "src/css/styles.css" type ="TEXT/CSS">
        <link rel = "stylesheet" href = "src/css/stails.css" type ="TEXT/CSS">
        <link rel = "stylesheet" href = "src/css/block.css" type ="TEXT/CSS">
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="src/img/logo.png" sizes="64x64">
        <title>Bloc de Notas  </title>
    </head>

<body>
<header class="right main-header transparent">
            <div class="full-menu">
                <ul class="">
                    <li><a href="index.php">INICIO</a></li>
                    <li><a href="entrenamiento2.php">ENTRENAMIENTO</a></li>
                    <li><a href="calculadora.php" >CALCULADORA</a></li>
                    <li><a href="motivaciones.php" >MOTIVACION</a></li>
                    <?php 
                        if(isset($_SESSION['idUsuario'])){
                            echo '<li><a href="cerrarSesion.php">CERRAR SESIÓN</a></li>';
                        }else{
                            echo '<li><a href="login.php">INICIAR SESIÓN</a></li>';
                        }
                    ?>
                </ul>
            </div>
            <nav>
                <div class="trigger hide show-on-small-and-down">
                    <svg class="bars" viewBox="0 0 100 100" onclick="this.classList.toggle('active');document.querySelector('.full-menu').classList.toggle('opened');">
                      <path class="line top" d="m 30,33 h 40 c 13.100415,0 14.380204,31.80258 6.899646,33.421777 -24.612039,5.327373 9.016154,-52.337577 -12.75751,-30.563913 l -28.284272,28.284272"></path>
                      <path class="line middle" d="m 70,50 c 0,0 -32.213436,0 -40,0 -7.786564,0 -6.428571,-4.640244 -6.428571,-8.571429 0,-5.895471 6.073743,-11.783399 12.286435,-5.570707 6.212692,6.212692 28.284272,28.284272 28.284272,28.284272"></path>
                      <path class="line bottom" d="m 69.575405,67.073826 h -40 c -13.100415,0 -14.380204,-31.80258 -6.899646,-33.421777 24.612039,-5.327373 -9.016154,52.337577 12.75751,30.563913 l 28.284272,-28.284272"></path>
                    </svg>

                </div>

                <ul class="hide-on-small-and-down horizontal">
                    <li><a href="index.php">INICIO</a></li>
                    <li><a href="entrenamiento2.php">ENTRENAMIENTO</a></li>
                    <li><a href="calculadora.php" >CALCULADORA</a></li>
                    <li><a href="motivaciones.php" >MOTIVACION</a></li>
                    <?php 
                        if(isset($_SESSION['idUsuario'])){
                            echo '<li><a href="cerrarSesion.php">CERRAR SESIÓN</a></li>';
                        }else{
                            echo '<li><a href="login.php">INICIAR SESIÓN</a></li>';
                        }
                    ?>
                </ul>
            </nav>
        </header>
            
          <!--PORTADA -->

            <main>     
                <div id="desaparecer" style="display: block;">   
                <section class="background background-image-9">
                    <div class="background-filter"></div>
                    <div class="image-9">
                        <h1 class="titulo">Bloc de Notas  </h1>
                    </div>
                </section>
                <section class="divider hide-on-small-and-down">
                </section>            
                <section class="information">
             <!--FIN DE PORTADA  -->            
              


<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<div id="information3">
<div id="box">
   
<label for="Titulo"> <span class="TituloFormulario">Titulo</span>  </label>
<input type="text" class="formulario"name="titulo" id="Titulo" >



<label for="Descripcion" class="TopDescripcion"> <span class="TituloFormulario">Descripcion</span>  </label><br>
<input type="text" class="formulario"name="descripcion" id="Descripcion" >

<label for="Descripcion" class="TopContenido"> <span class="TituloFormulario">Contenido</span>  </label><br>
<input type="text" class="formularioContenido"name="descripcion" id="Descripcion" >
<button id="MandarInformacion"  class="ButtonInformacion"> Enviar</button>


</div>


</div>