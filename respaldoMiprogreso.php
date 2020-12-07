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
        <link rel="icon" type="image/png" href="src/img/logo.png" sizes="64x64">
        <title>Mi Progreso</title>
    </head>

    <body>
        <?php include_once('php/handlebars/header.php')?>
        <main>
            <section class="background background-image-8">
                <div class="background-filter"></div>
                <div class="image-8">
                    <h1>TU PROGRESO</h1>
                    <h2 class="nameUser"><?php echo $_SESSION['nombreUsuario']?></h2>
                </div>
            </section>
            <section class="divider hide-on-small-and-down">
            </section>
            <section class="information">
                <div class="progress-container">
                    <div class="cardsCoaches" <?php if ($rolUsuario == 'admin' || $rolUsuario == 'coach') {
                        echo 'style="display: none;"';
                    }?>>
                        <?php 
                            if ($_SESSION['rol'] == 'usuario'){
                                $data = [
                                    ":idCoachNutriologo" => $idCoachNutriologo,
                                    ":idCoachEntrenador" => $idCoachEntrenador
                                ];

                                $dataCoaches = $funcionesDB->obtenerDatosCoaches($conexion, $data);

                                foreach ($dataCoaches as $dataCoach) {

                                    echo '
                                        <div class="cardCoach" style="background-image: url(\'' .  substr($dataCoach['srcFotoPerfil'], 3) . '\')">
                                        <div>
                                            <h2>' . $dataCoach['nombre'] . '</h2>
                                            <h3>' . $dataCoach['tipoCoach'] . '</h3>
                                            <h4>' . $dataCoach['email'] . '</h4>
                                            <p>' . $dataCoach['descripcion'] . '</p>
                                        </div>
                                        </div>
                                    ';
                                }
                            }
                            if (!isset($_SESSION['access_tokenStrava'])) {
                                echo '<a href="'. $urlAuthStrava .'" class="strava-login">Vincula tu cuenta con Strava <img src="src/img/strava-logo.svg"></a>';
                            }
                        ?>
                    </div>
                    <div>
                        <form autocomplete="off">
                            <label for="Nombre">
                                <p>Nombre</p>
                            </label>
                            <input type="text" name="Nombre" value="<?php echo $_SESSION['nombreUsuario']?>">
                            <label for="Edad">
                                <p>Edad</p>
                            </label>
                            <input type="number" name="Edad" value="<?php echo $edad?>">
                            <label for="Peso">
                                <p>Peso</p>
                            </label>
                            <input type="number" name="Peso" value="<?php echo $peso?>">
                                <select name="weightUnit" id="weightUnit" class="unidadesSelect" readonly>
                                    <option value="<?php echo $unidadPeso ?>"><?php echo $unidadPeso?></option>
                                </select>
                            <label for="Altura">
                                <p>Altura</p>
                            </label>
                            <input type="number" name="Altura" value="<?php echo $altura?>">
                                <select name="heightUnit" id="heightUnit" class="unidadesSelect" readonly >
                                    <option value="<?php echo $unidadAltura ?>"><?php echo $unidadAltura?></option>
                                </select>
                            <label for="IMC">
                                <p>IMC</p>
                            </label>
                            <input type="number" name="IMC" value="<?php echo $IMC?>" readonly>
                            <div>
                                <label for="Objetivo">
                                    <p>Objetivo</p>
                                </label>
                                <select name="Objetivo" readonly>
                                    <option value="<?php echo $objetivo ?>"><?php echo $objetivo ?></option>

                                    <?php
                                        $data = $funcionesDB->obtenerDatosComunes($conexion, 'objetivo', 'objetivos', $objetivo);

                                        foreach ($data as $dato){
                                            echo '<option value ="' . $dato['objetivo'].'">' .  $dato['objetivo']. '</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <div>
                                <label for="Nivel">
                                    <p>Nivel actual</p>
                                </label>
                                <select name="Nivel">
                                
                                    <option value="<?php echo $nivelEntrenamiento ?>"><?php echo $nivelEntrenamiento ?></option>

                                    <?php 
                                        $data = $funcionesDB->obtenerDatosComunes($conexion, 'nivel', 'niveles_posibles', $objetivo);

                                        foreach ($data as $dato){
                                            echo '<option value ="' . $dato['nivel'].'">' .  $dato['nivel']. '</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <div>
                                <label for="TipoDieta">
                                    <p>Tipo de dieta</p>
                                </label>
                                <select name="TipoDieta">
                                
                                    <option value="<?php echo $tipoDieta ?>"><?php echo $tipoDieta ?></option>

                                    <?php 
                                        $data = $funcionesDB->obtenerDatosComunes($conexion, 'tipoDieta', 'dietas', $tipoDieta);

                                        foreach ($data as $dato){
                                            echo '<option value ="' . $dato['tipoDieta'].'">' .  $dato['tipoDieta']. '</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <div>
                                <label for="tipoFormula">
                                    <p>Formula de la dieta</p>
                                </label>
                                <select name="tipoFormula">
                                
                                    <option value="<?php echo $tipoFormula ?>"><?php echo $tipoFormula ?></option>

                                    <?php 
                                        $data = $funcionesDB->obtenerDatosComunes($conexion, 'tipoFormula', 'dietas', $tipoFormula);

                                        foreach ($data as $dato){
                                            echo '<option value ="' . $dato['tipoFormula'].'">' .  $dato['tipoFormula']. '</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <label for="Lesiones">
                                <p>Lesiones</p>
                            </label>
                            <input type="number" name="Lesiones" value="<?php echo $lesiones?>">
                        </form>
                    </div>
                    <div>
                        <form autocomplete="off">
                        </form>
                    </div>
                </div>
            </section>
            <footer>
                <div>
                    <h3>Productos</h3>
                    <ul>
                        <li><a href="">ENTRENAMIENTO</a></li>
                        <li><a href="">NUTRICIÓN</a> </li>
                        <li><a href="">SUPLEMENTOS</a></li>
                        <li><a href="">CALCULADORAS</a></li>
                    </ul>
                </div>
                <div>
                    <h3>Avisos</h3>
                    <ul>
                        <li><a href="">AVISO DE PRIVACIDAD</a></li>
                        <li><a href="">AVISO LEGAL</a></li>
                    </ul>
                </div>
                <div>
                    <h3>Contacto</h3>
                    <ul>
                        <li><a href="">QUIENES SOMOS</a></li>
                        <li><a href="">PONTE EN CONTACTO CON NOSOTROS</a></li>
                    </ul>
                </div>
            </footer>
        </main>
        <?php include_once('php/handlebars/error.php'); ?>
    </body>
    <script src="src/js/coaches-cards.js"></script>
    <script src="src/js/photo-profile.js"></script>
    <script src ="src/js/progreso-images.js"></script>
    <script src="src/js/progreso-app.js"></script>
    <script src ="src/js/commun.js"></script>
</html>