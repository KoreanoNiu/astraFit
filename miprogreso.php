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

        if ($altura != null && $peso != null && $altura != '' && $peso != '' && $altura != 0 && $peso != 0) {
            $IMC = number_format($peso / ($altura  / 100 * $altura / 100), 2);
        }
         
        if (!isset($_SESSION['access_tokenStrava'])) {
            require 'php/strava-init.php';
            define('redirect_url', 'http://localhost/astraFit/php/update-strava.php?action=link');
            
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
                        echo 'style="display: block;"';
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
                            if (isset($_SESSION['access_tokenStrava'])) {
                                echo '<a href="stravaUserData.php" class="strava-login">Ver datos de mi cuenta de Strava <img src="src/img/strava-logo.svg"></a>';
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
                            <label for="porcentajeGrasa">
                                <p>Porcentaje de Grasa Corporal</p>
                            </label>
                            <input type="number" name="porcentajeGrasa" value="<?php echo $porcentajeGrasa?>">
                            <select name="porcentajeGrasa" id="porcentajeGrasa" class="unidadesSelect" readonly >
                                    <option value="%">%</option>
                                </select>
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
                                    $data = $funcionesDB->obtenerDatosComunes($conexion, 'nivel', 'niveles_posibles', $nivelEntrenamiento);

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
                    <div class="img-user-progress">
                        <div class="formPhoto">
                            <?php 

                            $data = $funcionesDB->obtenerImagenes($conexion, $_SESSION['idUsuario']);
                            if(count($data) != 0){
                                $template = '';

                                $estado = 'after';
                                $contador = 0;

                                foreach ($data as $dato){

                                    if ($contador >= count($data) - 1) {
                                        $estado = 'now';
                                    }

                                    $template .= '
                                    <div class="img-user ' .  $estado . '">
                                        <div class="header-img">
                                            <h2>' . $dato['fechaCreacion'] . '</h2>
                                            <div class="delete-img">
                                                <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" onclick="eliminarFoto(\'' . $dato['src'] .'\', \''. $dato['fechaCreacion'] .'\')">
                                                    <path d="m256 0c-141.164062 0-256 114.835938-256 256s114.835938 256 256 256 256-114.835938 256-256-114.835938-256-256-256zm0 0" fill="#126fbb"></path>
                                                    <path d="m350.273438 320.105469c8.339843 8.34375 8.339843 21.824219 0 30.167969-4.160157 4.160156-9.621094 6.25-15.085938 6.25-5.460938 0-10.921875-2.089844-15.082031-6.25l-64.105469-64.109376-64.105469 64.109376c-4.160156 4.160156-9.621093 6.25-15.082031 6.25-5.464844 0-10.925781-2.089844-15.085938-6.25-8.339843-8.34375-8.339843-21.824219 0-30.167969l64.109376-64.105469-64.109376-64.105469c-8.339843-8.34375-8.339843-21.824219 0-30.167969 8.34375-8.339843 21.824219-8.339843 30.167969 0l64.105469 64.109376 64.105469-64.109376c8.34375-8.339843 21.824219-8.339843 30.167969 0 8.339843 8.34375 8.339843 21.824219 0 30.167969l-64.109376 64.105469zm0 0" fill="#fafafa"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <img src="' . substr($dato['src'], 3) .'">
                                        </div>
                                    ';

                                    $contador++;
                                }
                                
                                echo $template;

                                echo '
                                    <form id="frmImage" onsubmit="return false" class ="hide">
                                    <div class="photoSelectButton">
                                        <div class="photoInput">
                                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 419.2 419.2" style="enable-background:new 0 0 419.2 419.2;" xml:space="preserve">
                                                <g>
                                                    <g>
                                                        <g>
                                                            <circle cx="158" cy="144.4" r="28.8"/>
                                                            <path d="M394.4,250.4c-13.6-12.8-30.8-21.2-49.6-23.6V80.4c0-15.6-6.4-29.6-16.4-40C318,30,304,24,288.4,24h-232
                                                                c-15.6,0-29.6,6.4-40,16.4C6,50.8,0,64.8,0,80.4v184.4V282v37.2c0,15.6,6.4,29.6,16.4,40c10.4,10.4,24.4,16.4,40,16.4h224.4
                                                                c14.8,12,33.2,19.6,53.6,19.6c23.6,0,44.8-9.6,60-24.8c15.2-15.2,24.8-36.4,24.8-60C419.2,286.8,409.6,265.6,394.4,250.4z
                                                                 M21.2,80.4c0-9.6,4-18.4,10.4-24.8c6.4-6.4,15.2-10.4,24.8-10.4h232c9.6,0,18.4,4,24.8,10.4c6.4,6.4,10.4,15.2,10.4,24.8v124.8
                                                                l-59.2-58.8c-4-4-10.8-4.4-15.2,0L160,236l-60.4-60.8c-4-4-10.8-4.4-15.2,0l-63.2,64V80.4z M56,354.8v-0.4
                                                                c-9.6,0-18.4-4-24.8-10.4c-6-6.4-10-15.2-10-24.8V282v-12.8L92.4,198l60.4,60.4c4,4,10.8,4,15.2,0l89.2-89.6l58.4,58.8
                                                                c-1.2,0.4-2.4,0.8-3.6,1.2c-1.6,0.4-3.2,0.8-5.2,1.6c-1.6,0.4-3.2,1.2-4.8,1.6c-1.2,0.4-2,0.8-3.2,1.6c-1.6,0.8-2.8,1.2-4,2
                                                                c-2,1.2-4,2.4-6,3.6c-1.2,0.8-2,1.2-3.2,2c-0.8,0.4-1.2,0.8-2,1.2c-3.6,2.4-6.8,5.2-9.6,8.4c-15.2,15.2-24.8,36.4-24.8,60
                                                                c0,6,0.8,11.6,2,17.6c0.4,1.6,0.8,2.8,1.2,4.4c1.2,4,2.4,8,4,12v0.4c1.6,3.2,3.2,6.8,5.2,9.6H56z M378.8,355.2
                                                                c-11.6,11.6-27.2,18.4-44.8,18.4c-16.8,0-32.4-6.8-43.6-17.6c-1.6-1.6-3.2-3.6-4.8-5.2c-1.2-1.2-2.4-2.8-3.6-4
                                                                c-1.6-2-2.8-4.4-4-6.8c-0.8-1.6-1.6-2.8-2.4-4.4c-0.8-2-1.6-4.4-2-6.8c-0.4-1.6-1.2-3.6-1.6-5.2c-0.8-4-1.2-8.4-1.2-12.8
                                                                c0-17.6,7.2-33.2,18.4-44.8c11.6-11.6,27.2-18.4,44.8-18.4c17.6,0,33.2,7.2,44.8,18.4c11.6,11.2,18.4,27.2,18.4,44.8
                                                                C397.2,328,390,343.6,378.8,355.2z"/>
                                                            <path d="M368.8,299.6h-24.4v-24.4c0-6-4.8-10.8-10.8-10.8s-10.8,4.8-10.8,10.8v24.4h-24.4c-6,0-10.8,4.8-10.8,10.8
                                                                s4.8,10.8,10.8,10.8h24.4v24.4c0,6,4.8,10.8,10.8,10.8s10.8-4.8,10.8-10.8v-24.4h24.4c6,0,10.8-4.8,10.8-10.8
                                                                S374.8,299.6,368.8,299.6z"/>
                                                        </g>
                                                    </g>
                                                </g>
                                                </svg>
                                            </div>
                                        </div>
                                        <input type="file" name="image" id="Foto" accept=".jpg,.png,.jfif">
                                    </form>';
                            }else{
                                echo '
                                    <form id="frmImage" onsubmit="return false">
                                    <div class="photoSelectButton">
                                        <div class="photoInput">
                                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 419.2 419.2" style="enable-background:new 0 0 419.2 419.2;" xml:space="preserve">
                                                <g>
                                                    <g>
                                                        <g>
                                                            <circle cx="158" cy="144.4" r="28.8"/>
                                                            <path d="M394.4,250.4c-13.6-12.8-30.8-21.2-49.6-23.6V80.4c0-15.6-6.4-29.6-16.4-40C318,30,304,24,288.4,24h-232
                                                                c-15.6,0-29.6,6.4-40,16.4C6,50.8,0,64.8,0,80.4v184.4V282v37.2c0,15.6,6.4,29.6,16.4,40c10.4,10.4,24.4,16.4,40,16.4h224.4
                                                                c14.8,12,33.2,19.6,53.6,19.6c23.6,0,44.8-9.6,60-24.8c15.2-15.2,24.8-36.4,24.8-60C419.2,286.8,409.6,265.6,394.4,250.4z
                                                                 M21.2,80.4c0-9.6,4-18.4,10.4-24.8c6.4-6.4,15.2-10.4,24.8-10.4h232c9.6,0,18.4,4,24.8,10.4c6.4,6.4,10.4,15.2,10.4,24.8v124.8
                                                                l-59.2-58.8c-4-4-10.8-4.4-15.2,0L160,236l-60.4-60.8c-4-4-10.8-4.4-15.2,0l-63.2,64V80.4z M56,354.8v-0.4
                                                                c-9.6,0-18.4-4-24.8-10.4c-6-6.4-10-15.2-10-24.8V282v-12.8L92.4,198l60.4,60.4c4,4,10.8,4,15.2,0l89.2-89.6l58.4,58.8
                                                                c-1.2,0.4-2.4,0.8-3.6,1.2c-1.6,0.4-3.2,0.8-5.2,1.6c-1.6,0.4-3.2,1.2-4.8,1.6c-1.2,0.4-2,0.8-3.2,1.6c-1.6,0.8-2.8,1.2-4,2
                                                                c-2,1.2-4,2.4-6,3.6c-1.2,0.8-2,1.2-3.2,2c-0.8,0.4-1.2,0.8-2,1.2c-3.6,2.4-6.8,5.2-9.6,8.4c-15.2,15.2-24.8,36.4-24.8,60
                                                                c0,6,0.8,11.6,2,17.6c0.4,1.6,0.8,2.8,1.2,4.4c1.2,4,2.4,8,4,12v0.4c1.6,3.2,3.2,6.8,5.2,9.6H56z M378.8,355.2
                                                                c-11.6,11.6-27.2,18.4-44.8,18.4c-16.8,0-32.4-6.8-43.6-17.6c-1.6-1.6-3.2-3.6-4.8-5.2c-1.2-1.2-2.4-2.8-3.6-4
                                                                c-1.6-2-2.8-4.4-4-6.8c-0.8-1.6-1.6-2.8-2.4-4.4c-0.8-2-1.6-4.4-2-6.8c-0.4-1.6-1.2-3.6-1.6-5.2c-0.8-4-1.2-8.4-1.2-12.8
                                                                c0-17.6,7.2-33.2,18.4-44.8c11.6-11.6,27.2-18.4,44.8-18.4c17.6,0,33.2,7.2,44.8,18.4c11.6,11.2,18.4,27.2,18.4,44.8
                                                                C397.2,328,390,343.6,378.8,355.2z"/>
                                                            <path d="M368.8,299.6h-24.4v-24.4c0-6-4.8-10.8-10.8-10.8s-10.8,4.8-10.8,10.8v24.4h-24.4c-6,0-10.8,4.8-10.8,10.8
                                                                s4.8,10.8,10.8,10.8h24.4v24.4c0,6,4.8,10.8,10.8,10.8s10.8-4.8,10.8-10.8v-24.4h24.4c6,0,10.8-4.8,10.8-10.8
                                                                S374.8,299.6,368.8,299.6z"/>
                                                        </g>
                                                    </g>
                                                </g>
                                                </svg>
                                            </div>
                                        </div>
                                        <input type="file" name="image" id="Foto" accept=".jpg,.png,.jfif">
                                    </form>';
                            }
                            ?>
                        </div>
                        <div class="buttonImg" style="display: flex;" id="addNewPhoto">
                            <label for="addNewPhoto">Añadir otra foto</label>
                        </div>
                        <div class="buttonImg" id="before">
                            <label for="Anterior">Anterior</label>
                        </div>
                        <div class="buttonImg" id="after">
                            <label for="Anterior">Siguiente</label>
                        </div>
                    </div>
                </div>
            </section>
            <?php include_once('php/handlebars/footer.php'); ?>
        </main>
        <?php include_once('php/handlebars/error.php'); ?>
    </body>
    <script src="src/js/coaches-cards.js"></script>
    <script src="src/js/photo-profile.js"></script>
    <script src ="src/js/progreso-images.js"></script>
    <script src="src/js/progreso-app.js"></script>
    <script src ="src/js/commun.js"></script>
</html>