<?php 
    session_start();

    if(isset($_SESSION['id_usuario']) && $_SESSION['id_usuario'] != ''){
        include_once('php/database.php');
        $conexion = Conexion::Conectar();
    
        $result = $conexion->prepare('SELECT nombre, unidadAltura, unidadPeso, fecha, altura, peso, objetivo, nivel FROM usuarios WHERE id_usuario=?');
        $result->execute([$_SESSION['id_usuario']]);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);

        $nombre = $data[0]['nombre'];
        $unidadAltura = $data[0]['unidadAltura'];
        $unidadPeso = $data[0]['unidadPeso'];
        $edad = $data[0]['fecha'];
        $peso = $data[0]['peso'];
        $altura = $data[0]['altura'];
        $objetivo = $data[0]['objetivo'];
        $nivelEntrenamiento = $data[0]['nivel'];

        $IMC = bcdiv($peso / ($altura  / 100 * $altura / 100), '1', 2);
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
        <title>Main index</title>
    </head>

    <body>
        <header>
            <nav class="fixed closed">
                <a href = "" class = "brand-logo center"><img src="src/img/logo.png" alt=""></a>
                <div class="sidenav-trigger hide show-on-small-and-down right">
                    <button class="menu" onclick="this.parentNode.parentNode.classList.toggle('opened');this.parentNode.parentNode.classList.toggle('closed');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu">
                        <svg width="40" height="40" viewBox="0 0 100 100">
                          <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                          <path class="line line2" d="M 20,50 H 80" />
                          <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                        </svg>
                      </button>
                </div>
                <div class="sidenav-trigger right">
                    <a href="cerrarSesion.php" class="hide-on-small-and-down">Cerrar sesión</a>
                </div>
                <!--ESta cerrado por el hide-->
                <aside class="show">
                    <div>
                        <ul>
                            <li><a href="entrenamiento.html">Entrenamiento</a></li>
                            <li><a href="">Nutrición</a></li>
                            <li><a href="">Motivación</a></li>
                            <li><a href="">Contacto</a></li>
                            <li><div class="buttom"><a href="cerrarSesion.php">Cerrar sesión</a></div></li>
                        </ul>
                    </div>
                    <div>
                    </div>
                </aside>
                <ul class="hide-on-small-and-down">
                    <li><a href="entrenamiento.html">Entrenamiento</a></li>
                    <li><a href="">Nutrición</a></li>
                    <li><a href="">Motivación</a></li>
                    <li><a href="">Contacto</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <section class="background background-image-2">
                <div class="background-filter"></div>
                <div class="image-2">
                    <h1>MI PROGRESO</h1>
                </div>
            </section>
            <section class="divider hide-on-small-and-down">
            </section>
            <section class="information">
                <div class="progress-container">
                    <div class="img-user-progress">
                        <div class="formPhoto">
                            <?php 

                            $result = $conexion->prepare('SELECT src, fechaCreacion FROM imagenes WHERE id_usuario=?');
                            $result->execute([$_SESSION['id_usuario']]);
                            $data = $result->fetchAll(PDO::FETCH_ASSOC);
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
                                            <h2>20:33 0/11/2020</h2>
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
                                        <input type="file" name="image" id="Foto" accept=".jpg,.png">
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
                                        <input type="file" name="image" id="Foto" accept=".jpg,.png">
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
                    <div>
                        <form autocomplete="off">
                            <label for="nombre">
                                <p>Nombre</p>
                            </label>
                            <input type="text" name="nombre" value="<?php echo $nombre?>" readonly>
                            <label for="Edad">
                                <p>Edad</p>
                            </label>
                            <input type="number" name="Edad" value="<?php echo $edad?>">
                            <label for="Peso">
                                <p>Peso</p>
                            </label>
                            <input type="number" name="Peso" value="<?php echo $peso?>">
                                <select name="weightUnit" id="weightUnit">
                                    <option value="<?php echo $unidadPeso ?>"><?php echo $unidadPeso ?></option>
                                </select>
                            <label for="Altira">
                                <p>Altura</p>
                            </label>
                            <input type="number" name="Altura" value="<?php echo $altura?>">
                                <select name="heightUnit" id="heightUnit" readonly>
                                    <option value="<?php echo $unidadAltura ?>"><?php echo $unidadAltura ?></option>
                                </select>
                            <label for="IMC">
                                <p>IMC</p>
                            </label>
                            <input type="number" name="IMC" value="<?php echo $IMC?>" readonly>
                        </form>
                    </div>
                    <div>
                        <form autocomplete="off">
                            <label for="objetivo">
                                <p>Objetivo</p>
                            </label>
                            <input type="text" name="objetivo" value="<?php echo $objetivo ?>">
                            <label for="nivelEntrenamiento">
                                <p>Nivel de entrenamiento</p>
                            </label>
                            <input type="text" name="nivelEntrenamiento" value="<?php echo $nivelEntrenamiento ?>">
                            <label for="Lesiones">
                                <p>Lesiones</p>
                            </label>
                            <input type="number" name="Lesiones" value="0" readonly>
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
    </body>
    <script src ="src/js/progreso-images.js"></script>
    <script src="src/js/progreso-app.js"></script>
</html>