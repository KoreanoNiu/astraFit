<?php 
    session_start();
    
    if (isset($_SESSION['access_tokenStrava'])){
        require 'php/strava-init.php';
        define('redirect_url', 'http://localhost/astraFit/php/update-strava.php?action=refresh');
        
        //Strava Api
        $api = new StravaApi(client_id, client_secret);

        $dataUser = $api->get($_SESSION['access_tokenStrava'], 'athlete');
        $dataUser = json_decode($dataUser, true);

        if (isset($dataUser['message'])) {
            $urlAuthStrava = $api->authenticationUrl(redirect_url, approvalPrompt, scope);
        }else{
            $activitiesUser = $api->get($_SESSION['access_tokenStrava'], 'activities');
            $activitiesUser = json_decode($activitiesUser, true);
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
                    <h1>TUS DATOS DE STRAVA</h1>
                    <h2 class="nameUser"><?php echo $_SESSION['nombreUsuario']?></h2>
                </div>
            </section>
            <section class="divider hide-on-small-and-down" style="border-color: transparent transparent #ffffff transparent;">
            </section>
            <section class="strava-information" style="background-color: #ffffff;">
                <div class="strava-data-container">
                    <div class="container">
                        <?php if (isset($urlAuthStrava)) {
                            echo '<div>
                                        <h1>
                                            No pudimos acceder al API de Strava, refresca tu sesión de Stava, por favor.
                                        </h1>
                                        <a href="'. $urlAuthStrava .'" class="strava-login">Refrescar sesión Strava <img src="src/img/strava-logo.svg"></a>
                                    </div>
                                ';
                        }else{
                            echo '
                                <div>
                                    <h1>PERFIL</h1>
                                    <img src="' . $dataUser['profile'] .'" alt="">
                                    <h1>' . $dataUser['firstname'] . ' ' . $dataUser['lastname'] .'</h1>
                                    <h2>' . $dataUser['username'] .'</h2>
                                    <h3>' . $dataUser['city'] . ', '. $dataUser['state'] . ', '. $dataUser['country'] . '</h3>
                                    <h4>Fecha registro: ' . $dataUser['created_at'] .'</h4>
                                    <p>Sexo: '. $dataUser['sex'] .'</p>
                                    <p>Amigos: ' . $dataUser['friend'] . '</p>
                                    <p>Seguidores: ' . $dataUser['follower'] . '</p>
                                </div>
                                <div>
                                    <h1>ACTIVIDADES</h1>
                                    <table>
                                        <tr>
                                            <th>Actividad</th>
                                            <th>Nombre</th>
                                            <th>Distancia</th>
                                            <th>Duración</th>
                                            <th>Altitud</th>
                                            <th>Tipo de actvidad</th>
                                            <th>Fecha de inicio</th>
                                            <th>Velocidad promedio</th>
                                            <th>Velocidad máxima</th>
                                            <th>Pulsaciones del corazón</th>
                                            <th>Ciudad</th>
                                            <th>Estado</th>
                                            <th>País</th>
                                        </tr>';
                                        $contador = 0;
                                        $gearId = [];
                                        foreach ($activitiesUser as $activitie) {
                                            $contador++;
                                            echo '<tr><td>' . $contador . '</td>
                                                <td>' . $activitie['name'] .'</td>
                                                <td>' . $activitie['distance'] . 'm</td>
                                                <td>' . ($activitie['moving_time']) / 3600 . 'hr</td>
                                                <td>' . $activitie['total_elevation_gain'] .'m</td>
                                                <td>'. $activitie['type'] .'</td>
                                                <td>' . $activitie['start_date'] . '</td>
                                                <td>' . $activitie['average_speed'] . ' km/h</td>
                                                <td>' . $activitie['max_speed'].' km/h</td>
                                                <td>' . $activitie['has_heartrate'] . '</td>
                                                <td>' . $activitie['location_city'] . '</td>
                                                <td>' . $activitie['location_state'] . '</td>
                                                <td>' . $activitie['location_country'] . '</td></tr>
                                            ';
                                            $gearId[$contador] = $activitie['gear_id'];
                                        }
                                    echo '</table>
                                </div>
                                <div>
                                    <h1>EQUIPAMENTO</h1>
                                    <table>
                                        <tr>
                                            <th>Equipamento</th>
                                            <th>Nombre</th>
                                            <th>Marca</th>
                                            <th>Modelo</th>
                                            <th>Distancia Recorrida</th>
                                            <th>Descripción</th>
                                        </tr>';
                                        $dataGear = [];
                                        foreach ($gearId as $id) {
                                            $dataGear[] = json_decode($api->get($_SESSION['access_tokenStrava'], 'gear/id=' . $id), true);
                                        }
                                                                             $contador = 0;
                                        foreach ($dataGear as $gear) {
                                            $contador++;
                                            echo '<tr>
                                                    <td>' . $contador . '</td>
                                                    <td>' . $gear['name'] .'</td>
                                                    <td>' . $gear['brand_name'] .'</td>
                                                    <td>' . $gear['model_name'] .'</td>
                                                    <td>' . $gear['distance'] .'m</td>
                                                    <td>' . $gear['description'] .'</td>
                                                </tr>
                                            ';
                                        }
                                    echo '</table>
                                </div>';
                                echo'
                                <div>
                                    <h1>Crear una nueva actividad</h1>
                                    <form action="">
                                        <div>
                                            <label for="">
                                                Distancia
                                            </label>
                                            <input type="number">
                                            <select name="" id="">
                                                <option value="">Kilometros</option>
                                                <option value="">Metros</option>
                                                <option value="">Millas</option>
                                                <option value="">Yardas</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="">
                                                Duración
                                            </label>
                                            <input type="number">
                                            <input type="number">
                                            <input type="number">
                                        </div>
                                        <div>
                                            <label for="">
                                                Nombre actividad
                                            </label>
                                            <input type="text">
                                        </div>
                                        <div>
                                            <label for="">
                                                Nombre actividad
                                            </label>
                                            <input type="text">
                                        </div>
                                        <input type="submit" class="strava-login" value="Crear nueva actividad">
                                    </form>
                                </div>';
                        }
                        ?>
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