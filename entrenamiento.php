<?php 

    session_start();

    if(isset($_SESSION['id_usuario']) && $_SESSION['id_usuario'] != ''){
    }else{
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang=es>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/stails.css" type="TEXT/CSS">
    <link rel="stylesheet" href="src/css/styles.css" type="TEXT/CSS">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
    <title>ENTRENAMIENTOS</title>
</head>

<body>
    <header>
        <nav class="fixed closed">
            <a href="" class="brand-logo center"><img src="src/img/logo.png" alt=""></a>
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
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="calculadora.php">Nutrición</a></li>
                        <li><a href="motivaciones.php">Motivación</a></li>
                        <li><a href="miprogreso.php">Mi progreso</a></li>
                        <li><a href="cerrarSesion.php">Cerrar sesión</a></li>
                    </ul>
                </div>
                <div>
                </div>
            </aside>
            <ul class="hide-on-small-and-down">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="calculadora.php">Nutrición</a></li>
                <li><a href="motivaciones.php">Motivación</a></li>
                <li><a href="miprogreso.php">Mi progreso</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="desapareceC" style="display: block;" class="background background-image-3">
            <div class="background-filter"></div>
            <div class="image-3">
                <h1>EJERCICIOS Y ENTRENAMIENTO</h1>
                <H2>¿Qué rutina estás buscando?</H2>
            </div>
        </section>
        <section class="divider hide-on-small-and-down">
        </section>
        <section class="information">
            <div id="desaparecer" style="display: block;">

                <div class="cards">
                    <div class="card">
                        <div class="card-image">
                            <img src="src/img/FULLBODY.jpg" alt="">
                        </div>
                        <div class="card-content" style="text-align:center;">
                            <h2>FULLBODY</h2>
                            <p>Rutina para absolutamente todo el cuerpo.</p>
                            <button class="botonon2" id="fullbody">¡EMPEZEMOS!</button>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-image">
                            <img src="src/img/ABDOMEN.jpg" alt="">
                        </div>
                        <div class="card-content" style="text-align:center;">
                            <h2>ABDOMEN</h2>
                            <p>Ejercicios específicos para definir tu abdomen.</p>
                            <button class="botonon2" id="abdomen">¡EMPEZEMOS!</button>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-image">
                            <img src="src/img/PECHO.jpg" alt="">
                        </div>
                        <div class="card-content" style="text-align:center;">
                            <h2>PECHO</h2>
                            <p>Ejercicios para definir tu pecho.</p>
                            <button class="botonon2" id="pecho">¡EMPEZEMOS!</button>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-image">
                            <img src="src/img/BRAZO.jpg" alt="">
                        </div>
                        <div class="card-content" style="text-align:center;">
                            <h2>BRAZO</h2>
                            <p>¡Define tus brazos como nunca!</p>
                            <button class="botonon2" id="brazo">¡EMPEZEMOS!</button>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-image">
                            <img src="src/img/PIERNA.jpg" alt="">
                        </div>
                        <div class="card-content" style="text-align:center;">
                            <h2>PIERNA</h2>
                            <p>¡Llegó la hora de marcar esas piernas!</p>
                            <button class="botonon2" id="pierna">¡EMPEZEMOS!</button>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-image">
                            <img src="src/img/GLUTEO.jpg" alt="">
                        </div>
                        <div class="card-content" style="text-align:center;">
                            <h2>GLÚTEO</h2>
                            <p>Ejercicios para definir o aumentar tus glúteos.</p>
                            <button class="botonon2" id="gluteo">¡EMPEZEMOS!</button>
                        </div>
                    </div>


                </div>
            </div>
            <br><br>

            <div id="full" style="display: none; text-align: center;">
                <div class="cardF">

                    <div class="cardF-content" style="text-align:center;"">
                            <h2 id=" rutina">
                        </h2>
                        <p id="desc"></p>

                        <div>
                            <h4 id="jeje">Rutina para:</h4>
                            <button class="botonon3" id="casa1">CASA</button>
                            <button class="botonon3" id="gym1">GYM</button><br><br>
                        </div>
                    </div>
                </div><br><br>

                <div id="rutinaCasa" style="display:none;">
                    <div class="cardF">

                        <div class="cardF-content" style="text-align:center;"">
                                    <h4>Demostración: </h4>
                                    <img id=" foto" src="src/entrenamientos/burpees.gif" alt="" height="200px">

                            <div>
                                <h4 id="georgina">Burpees</h4>
                                <h4 id="karla">12 repeticiones</h4>
                                <button class="botonon4" id="sig">SIGUIENTE</button>
                                <div id="sig2" style="display: none;">
                                    <button class="botonon4" id="otro">SIGUIENTE</button>
                                </div>
                                <div id="sig3" style="display: none;">
                                    <button class="botonon4" id="otro1">SIGUIENTE</button>
                                </div>
                                <div id="sig4" style="display: none;">
                                    <button class="botonon4" id="otro2">SIGUIENTE</button>
                                </div>
                                <div id="sig5" style="display: none;">
                                    <button class="botonon4" id="otro3">SIGUIENTE</button>
                                </div>
                                <div id="sig6" style="display: none;">
                                    <button class="botonon4" id="otro4">SIGUIENTE</button>
                                </div>
                                <div id="sig7" style="display: none;">
                                    <button class="botonon4" id="otro5">SIGUIENTE</button>

                                </div>
                                <div id="ekis" style="display:none;">
                                    <button class="botonon4" id="terminar2">SIGUIENTE</button>
                                </div>
                                <div id="mostrar2" style="display: none;">

                                    <div class="card9">
                                        <div class="card9-content">

                                            <h4 id="calorias">¡TERMINASTE! <br>Recuerda que cada que quieras volver a iniciar la rutina puedes volver a la sección de entrenamientos.</h4><br>
                                            <a href="entrenamiento.html">CERRAR</a> <br><br><br>
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>

                <div id="rutinaGym" style="display:none;">
                    <div class="cardF">

                        <div class="cardF-content" style="text-align:center;"">
                                <h4>Demostración: </h4>
                                <img id=" foto1" src="src/entrenamientos/1.gif" alt="" height="200px">

                            <div>
                                <h4 id="georgina1">Subida de cajón</h4>
                                <h4 id="karla1">6 series de 10 repeticiones</h4>
                                <button class="botonon4" id="bA">SIGUIENTE</button>
                                <div id="bB" style="display: none;">
                                    <button class="botonon4" id="bB">SIGUIENTE</button>
                                </div>
                                <div id="bC" style="display: none;">
                                    <button class="botonon4" id="bC">SIGUIENTE</button>
                                </div>
                                <div id="bD" style="display: none;">
                                    <button class="botonon4" id="bD">SIGUIENTE</button>
                                </div>
                                <div id="terminar" style="display: none;">
                                    <button class="botonon4" id="terminar">SIGUIENTE</button>
                                    <div id="mostrar3" style="display: none;">
                                        <div class="card9">
                                            <div class="card9-content">

                                                <h4 id="calorias">¡TERMINASTE! <br>Recuerda que cada que quieras volver a iniciar la rutina puedes volver a la sección de entrenamientos.</h4><br>
                                                <a href="entrenamiento.html">CERRAR</a> <br><br><br>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>

        </section>


        <script type="text/javascript">
            document.getElementById("fullbody").onclick = function() {
                document.getElementById("rutina").innerHTML = "-FULLBODY-";
                document.getElementById("desc").innerHTML = "Rutina para absolutamente todo el cuerpo.";

                document.getElementById("desaparecer").style.display = "none";
                document.getElementById("desapareceC").style.display = "none";
                document.getElementById("full").style.display = "block";

                document.getElementById("casa1").onclick = function() {
                    document.getElementById("casa1").style.display = "none";
                    document.getElementById("gym1").style.display = "none";
                    document.getElementById("jeje").innerHTML = "";
                    document.getElementById("rutinaCasa").style.display = "block";


                    var fotoMostrada = "src/entrenamientos/burpees";

                    function repetir() {
                        document.getElementById("sig").onclick = function() {
                            var imagen = document.getElementById("foto");


                            if (fotoMostrada == "src/entrenamientos/burpees") {
                                imagen.src = "src/entrenamientos/correr.gif";
                                fotoMostrada = "src/entrenamientos/correr";
                                document.getElementById("georgina").innerHTML = "Trotar";
                                document.getElementById("karla").innerHTML = "30 segundos";
                            } else {
                                imagen.src = "src/entrenamientos/lagartijas.gif";
                                fotoMostrada = "src/entrenamientos/lagartijas";
                                document.getElementById("georgina").innerHTML = "Lagartijas";
                                document.getElementById("karla").innerHTML = "15 repeticiones en 4 series.";
                                document.getElementById("sig").style.display = "none";
                                document.getElementById("sig2").style.display = "block";
                            }

                        }
                        document.getElementById("otro").onclick = function() {
                            var imagen = document.getElementById("foto");

                            if (fotoMostrada == "src/entrenamientos/lagartijas") {
                                imagen.src = "src/entrenamientos/crunchs.gif";
                                fotoMostrada = "src/entrenamientos/crunchs";
                                document.getElementById("georgina").innerHTML = "Crunch abdominal";
                                document.getElementById("karla").innerHTML = "45 repeticiones en 4 series.";
                            } else {
                                imagen.src = "src/entrenamientos/v.gif";
                                fotoMostrada = "src/entrenamientos/v";
                                document.getElementById("georgina").innerHTML = "Abdominal en V";
                                document.getElementById("karla").innerHTML = "15 repeticiones en 4 series.";
                                document.getElementById("sig2").style.display = "none";
                                document.getElementById("sig3").style.display = "block";
                            }
                        }
                        document.getElementById("otro1").onclick = function() {
                            var imagen = document.getElementById("foto");

                            if (fotoMostrada == "src/entrenamientos/v") {
                                imagen.src = "src/entrenamientos/oblicuos.gif";
                                fotoMostrada = "src/entrenamientos/oblicuos";
                                document.getElementById("georgina").innerHTML = "Oblicuos";
                                document.getElementById("karla").innerHTML = "20 repeticiones de cada lado en 4 series.";
                            } else {
                                imagen.src = "src/entrenamientos/patadas.gif";
                                fotoMostrada = "src/entrenamientos/patadas";
                                document.getElementById("georgina").innerHTML = "Abdominal bajo";
                                document.getElementById("karla").innerHTML = "40 repeticiones en 4 series.";
                                document.getElementById("sig3").style.display = "none";
                                document.getElementById("sig4").style.display = "block";
                            }
                        }

                        document.getElementById("otro2").onclick = function() {
                            var imagen = document.getElementById("foto");

                            if (fotoMostrada == "src/entrenamientos/patadas") {
                                imagen.src = "src/entrenamientos/diamante.gif";
                                fotoMostrada = "src/entrenamientos/diamante";
                                document.getElementById("georgina").innerHTML = "Flexiones en diamante";
                                document.getElementById("karla").innerHTML = "20 repeticiones en 4 series.";
                            } else {
                                imagen.src = "src/entrenamientos/rotacion.gif";
                                fotoMostrada = "src/entrenamientos/rotacion";
                                document.getElementById("georgina").innerHTML = "Flexión y rotación";
                                document.getElementById("karla").innerHTML = "20 repeticiones cada lado en 3 series.";
                                document.getElementById("sig4").style.display = "none";
                                document.getElementById("sig5").style.display = "block";
                            }
                        }

                        document.getElementById("otro3").onclick = function() {
                            var imagen = document.getElementById("foto");

                            if (fotoMostrada == "src/entrenamientos/rotacion") {
                                imagen.src = "src/entrenamientos/apoyo.gif";
                                fotoMostrada = "src/entrenamientos/apoyo";
                                document.getElementById("georgina").innerHTML = "Flexiones con apoyo en base";
                                document.getElementById("karla").innerHTML = "20 repeticiones en 3 series.";
                            } else {
                                imagen.src = "src/entrenamientos/squats.gif";
                                fotoMostrada = "src/entrenamientos/squats";
                                document.getElementById("georgina").innerHTML = "Zancadas";
                                document.getElementById("karla").innerHTML = "20 repeticiones cada lado en 4 series.";
                                document.getElementById("sig5").style.display = "none";
                                document.getElementById("sig6").style.display = "block";
                            }
                        }
                        document.getElementById("otro4").onclick = function() {
                            var imagen = document.getElementById("foto");

                            if (fotoMostrada == "src/entrenamientos/squats") {
                                imagen.src = "src/entrenamientos/triceps.gif";
                                fotoMostrada = "src/entrenamientos/triceps";
                                document.getElementById("georgina").innerHTML = "Tríceps en suelo o silla";
                                document.getElementById("karla").innerHTML = "20 repeticiones en 4 series.";
                            } else {
                                imagen.src = "src/entrenamientos/sentasalto.gif";
                                fotoMostrada = "src/entrenamientos/sentasalto";
                                document.getElementById("georgina").innerHTML = "Sentadilla con salto";
                                document.getElementById("karla").innerHTML = "25 repeticiones cada lado en 3 series.";
                                document.getElementById("sig6").style.display = "none";
                                document.getElementById("sig7").style.display = "block";
                            }
                        }

                        document.getElementById("otro5").onclick = function() {
                            var imagen = document.getElementById("foto");

                            if (fotoMostrada == "src/entrenamientos/sentasalto") {
                                imagen.src = "src/entrenamientos/tijera.gif";
                                fotoMostrada = "src/entrenamientos/tijera";
                                document.getElementById("georgina").innerHTML = "Saltos de tijera";
                                document.getElementById("karla").innerHTML = "30 segundos.";
                                document.getElementById("sig7").style.display = "none";

                                document.getElementById("ekis").style.display = "block";
                            }
                            document.getElementById("terminar2").onclick = function() {
                                document.getElementById("mostrar2").style.display = "block";
                            }
                        }

                    }
                    repetir();







                }
                document.getElementById("gym1").onclick = function() {
                    document.getElementById("casa1").style.display = "none";
                    document.getElementById("gym1").style.display = "none";
                    document.getElementById("jeje").innerHTML = "";
                    document.getElementById("rutinaGym").style.display = "block";


                    var fotoMostrada = "src/entrenamientos/1";

                    document.getElementById("bA").onclick = function() {
                        var imagen = document.getElementById("foto1");


                        if (fotoMostrada == "src/entrenamientos/1") {
                            imagen.src = "src/entrenamientos/2.gif";
                            fotoMostrada = "src/entrenamientos/2";
                            document.getElementById("georgina1").innerHTML = "Jalón al pecho";
                            document.getElementById("karla1").innerHTML = "12 series de 5 repeticiones con el peso máximo que puedas soportar.";
                        } else {
                            imagen.src = "src/entrenamientos/3.gif";
                            fotoMostrada = "src/entrenamientos/3";
                            document.getElementById("georgina1").innerHTML = "Press de banca plano";
                            document.getElementById("karla1").innerHTML = "12 series de 5 repeticiones con el peso máximo que puedas soportar.";
                            document.getElementById("bA").style.display = "none";
                            document.getElementById("bB").style.display = "block";
                        }

                    }

                    document.getElementById("bB").onclick = function() {
                        var imagen = document.getElementById("foto1");


                        if (fotoMostrada == "src/entrenamientos/3") {
                            imagen.src = "src/entrenamientos/4.gif";
                            fotoMostrada = "src/entrenamientos/4";
                            document.getElementById("georgina1").innerHTML = "Sentadilla con peso";
                            document.getElementById("karla1").innerHTML = "12 series de 5 repeticiones con el peso máximo que puedas soportar.";
                        } else {
                            imagen.src = "src/entrenamientos/5.gif";
                            fotoMostrada = "src/entrenamientos/5";
                            document.getElementById("georgina1").innerHTML = "Fondos";
                            document.getElementById("karla1").innerHTML = "6 series de 10 repeticiones.";
                            document.getElementById("bB").style.display = "none";
                            document.getElementById("bC").style.display = "block";
                        }

                    }

                    document.getElementById("bC").onclick = function() {
                        var imagen = document.getElementById("foto1");


                        if (fotoMostrada == "src/entrenamientos/5") {
                            imagen.src = "src/entrenamientos/6.gif";
                            fotoMostrada = "src/entrenamientos/6";
                            document.getElementById("georgina1").innerHTML = "Zancadas";
                            document.getElementById("karla1").innerHTML = "12 series de 5 repeticiones con el peso máximo que puedas soportar.";
                        } else {
                            imagen.src = "src/entrenamientos/7.gif";
                            fotoMostrada = "src/entrenamientos/7";
                            document.getElementById("georgina1").innerHTML = "Mancuernas para bícep.";
                            document.getElementById("karla1").innerHTML = "12 series de 5 repeticiones con el peso máximo que puedas soportar.";
                            document.getElementById("bC").style.display = "none";
                            document.getElementById("bD").style.display = "block";
                        }

                    }
                    document.getElementById("bD").onclick = function() {
                        var imagen = document.getElementById("foto1");


                        if (fotoMostrada == "src/entrenamientos/7") {
                            imagen.src = "src/entrenamientos/8.gif";
                            fotoMostrada = "src/entrenamientos/8";
                            document.getElementById("georgina1").innerHTML = "Extender cuadríceps";
                            document.getElementById("karla1").innerHTML = "12 series de 5 repeticiones con el peso máximo que puedas soportar.";
                            document.getElementById("bD").style.display = "none";
                            document.getElementById("terminar").style.display = "block";
                        }
                        document.getElementById("terminar").onclick = function() {
                            document.getElementById("mostrar3").style.display = "block";
                        }


                    }

                }
            }
            //ABDOMEN-
            document.getElementById("abdomen").onclick = function() {

                document.getElementById("georgina").innerHTML = "Crunch abdominal";
                document.getElementById("karla").innerHTML = "6 series de 15 repeticiones.";

                var imagen = document.getElementById("foto");
                imagen.src = "src/entrenamientos/9.gif";
                document.getElementById("rutina").innerHTML = "-ABDOMEN-";
                document.getElementById("desc").innerHTML = "Rutina para tu abdomen.";

                document.getElementById("desaparecer").style.display = "none";
                document.getElementById("desapareceC").style.display = "none";
                document.getElementById("full").style.display = "block";

                document.getElementById("casa1").onclick = function() {
                    document.getElementById("casa1").style.display = "none";
                    document.getElementById("gym1").style.display = "none";
                    document.getElementById("jeje").innerHTML = "";
                    document.getElementById("rutinaCasa").style.display = "block";


                    var fotoMostrada = "src/entrenamientos/9";

                    function repetir() {
                        document.getElementById("sig").onclick = function() {
                            var imagen = document.getElementById("foto");


                            if (fotoMostrada == "src/entrenamientos/9") {
                                imagen.src = "src/entrenamientos/10.gif";
                                fotoMostrada = "src/entrenamientos/10";
                                document.getElementById("georgina").innerHTML = "Rotación abdominal";
                                document.getElementById("karla").innerHTML = "6 series de 12 repeticiones.";
                            } else {
                                imagen.src = "src/entrenamientos/11.gif";
                                fotoMostrada = "src/entrenamientos/11";
                                document.getElementById("georgina").innerHTML = "Flexión lateral para oblicuos";
                                document.getElementById("karla").innerHTML = "5 series de 15 repeticiones (lado derecho y lado izquierdo).";
                                document.getElementById("sig").style.display = "none";
                                document.getElementById("sig2").style.display = "block";
                            }

                        }
                        document.getElementById("otro").onclick = function() {
                            var imagen = document.getElementById("foto");

                            if (fotoMostrada == "src/entrenamientos/11") {
                                imagen.src = "src/entrenamientos/12.gif";
                                fotoMostrada = "src/entrenamientos/12";
                                document.getElementById("georgina").innerHTML = "Escalada de montaña";
                                document.getElementById("karla").innerHTML = "40 repeticiones de cada pierna.";
                            } else {
                                imagen.src = "src/entrenamientos/13.gif";
                                fotoMostrada = "src/entrenamientos/13";
                                document.getElementById("georgina").innerHTML = "Flexión para oblicuos";
                                document.getElementById("karla").innerHTML = "50 repeticiones cada lado.";
                                document.getElementById("sig2").style.display = "none";
                                document.getElementById("sig3").style.display = "block";
                            }
                        }
                        document.getElementById("otro1").onclick = function() {
                            var imagen = document.getElementById("foto");

                            if (fotoMostrada == "src/entrenamientos/13") {
                                imagen.src = "src/entrenamientos/14.gif";
                                fotoMostrada = "src/entrenamientos/14";
                                document.getElementById("georgina").innerHTML = "Abdominal en V";
                                document.getElementById("karla").innerHTML = "40 repeticiones.";
                            } else {
                                imagen.src = "src/entrenamientos/15.gif";
                                fotoMostrada = "src/entrenamientos/15";
                                document.getElementById("georgina").innerHTML = "Contracción de abdomen";
                                document.getElementById("karla").innerHTML = "40 repeticiones";
                                document.getElementById("sig3").style.display = "none";
                                document.getElementById("sig4").style.display = "block";
                            }
                        }

                        document.getElementById("otro2").onclick = function() {
                            var imagen = document.getElementById("foto");

                            if (fotoMostrada == "src/entrenamientos/15") {
                                imagen.src = "src/entrenamientos/16.gif";
                                fotoMostrada = "src/entrenamientos/16";
                                document.getElementById("georgina").innerHTML = "Contracción de oblicuos.";
                                document.getElementById("karla").innerHTML = "40 repeticiones cada lado.";

                                document.getElementById("otro2").style.display = "none";
                                document.getElementById("ekis").style.display = "block";
                            }
                            document.getElementById("terminar2").onclick = function() {
                                document.getElementById("mostrar2").style.display = "block";
                            }


                        }

                    }
                    repetir();







                }
                document.getElementById("gym1").onclick = function() {
                    document.getElementById("georgina1").innerHTML = "Abdominal en semi V";
                    document.getElementById("karla1").innerHTML = "6 series de 15 repeticiones.";
                    var imagen = document.getElementById("foto1");
                    imagen.src = "src/entrenamientos/17.gif";

                    document.getElementById("casa1").style.display = "none";
                    document.getElementById("gym1").style.display = "none";
                    document.getElementById("jeje").innerHTML = "";
                    document.getElementById("rutinaGym").style.display = "block";


                    var fotoMostrada = "src/entrenamientos/17";

                    document.getElementById("bA").onclick = function() {
                        var imagen = document.getElementById("foto1");


                        if (fotoMostrada == "src/entrenamientos/17") {
                            imagen.src = "src/entrenamientos/18.gif";
                            fotoMostrada = "src/entrenamientos/18";
                            document.getElementById("georgina1").innerHTML = "Twist ruso";
                            document.getElementById("karla1").innerHTML = "6 series de 10 repeticiones cada lado.";
                        } else {
                            imagen.src = "src/entrenamientos/19.gif";
                            fotoMostrada = "src/entrenamientos/19";
                            document.getElementById("georgina1").innerHTML = "Contracción de oblicuos con apoyo de pelota.";
                            document.getElementById("karla1").innerHTML = "6 series de 10 repeticiones cada lado.";
                            document.getElementById("bA").style.display = "none";
                            document.getElementById("bB").style.display = "block";
                        }

                    }

                    document.getElementById("bB").onclick = function() {
                        var imagen = document.getElementById("foto1");


                        if (fotoMostrada == "src/entrenamientos/19") {
                            imagen.src = "src/entrenamientos/20.gif";
                            fotoMostrada = "src/entrenamientos/20";
                            document.getElementById("georgina1").innerHTML = "Contracción lateral de oblicuos";
                            document.getElementById("karla1").innerHTML = "50 repeticiones cada lado..";
                        } else {
                            imagen.src = "src/entrenamientos/21.gif";
                            fotoMostrada = "src/entrenamientos/21";
                            document.getElementById("georgina1").innerHTML = "Contracción abdominal con apoyo de barra.";
                            document.getElementById("karla1").innerHTML = "6 series de 10 repeticiones.";
                            document.getElementById("bB").style.display = "none";
                            document.getElementById("bC").style.display = "block";
                        }

                    }

                    document.getElementById("bC").onclick = function() {
                        var imagen = document.getElementById("foto1");


                        if (fotoMostrada == "src/entrenamientos/21") {
                            imagen.src = "src/entrenamientos/22.gif";
                            fotoMostrada = "src/entrenamientos/22";
                            document.getElementById("georgina1").innerHTML = "Estiramiento abdominal.";
                            document.getElementById("karla1").innerHTML = "45 repeticiones.";
                        } else {
                            imagen.src = "src/entrenamientos/23.gif";
                            fotoMostrada = "src/entrenamientos/23";
                            document.getElementById("georgina1").innerHTML = "Escalada de montaña";
                            document.getElementById("karla1").innerHTML = "12 series de 5 repeticiones.";
                            document.getElementById("bC").style.display = "none";
                            document.getElementById("bD").style.display = "block";
                        }

                    }
                    document.getElementById("bD").onclick = function() {
                        var imagen = document.getElementById("foto1");


                        if (fotoMostrada == "src/entrenamientos/23") {
                            imagen.src = "src/entrenamientos/24.gif";
                            fotoMostrada = "src/entrenamientos/24";
                            document.getElementById("georgina1").innerHTML = "Contracción de abdomen";
                            document.getElementById("karla1").innerHTML = "50 repeticiones.";
                            document.getElementById("bD").style.display = "none";
                            document.getElementById("terminar").style.display = "block";
                        }
                        document.getElementById("terminar").onclick = function() {
                            document.getElementById("mostrar3").style.display = "block";
                        }


                    }

                }
            }
            //pecho
            document.getElementById("pecho").onclick = function() {

                document.getElementById("georgina").innerHTML = "Flexiones";
                document.getElementById("karla").innerHTML = "6 series de 15 repeticiones.";

                var imagen = document.getElementById("foto");
                imagen.src = "src/entrenamientos/25.gif";
                document.getElementById("rutina").innerHTML = "-PECHO-";
                document.getElementById("desc").innerHTML = "Rutina para tus pectorales.";

                document.getElementById("desaparecer").style.display = "none";
                document.getElementById("desapareceC").style.display = "none";
                document.getElementById("full").style.display = "block";

                document.getElementById("casa1").onclick = function() {
                    document.getElementById("casa1").style.display = "none";
                    document.getElementById("gym1").style.display = "none";
                    document.getElementById("jeje").innerHTML = "";
                    document.getElementById("rutinaCasa").style.display = "block";


                    var fotoMostrada = "src/entrenamientos/25";

                    function repetir() {
                        document.getElementById("sig").onclick = function() {
                            var imagen = document.getElementById("foto");


                            if (fotoMostrada == "src/entrenamientos/25") {
                                imagen.src = "src/entrenamientos/26.gif";
                                fotoMostrada = "src/entrenamientos/26";
                                document.getElementById("georgina").innerHTML = "Burpees";
                                document.getElementById("karla").innerHTML = "6 series de 12 repeticiones.";
                            } else {
                                imagen.src = "src/entrenamientos/27.gif";
                                fotoMostrada = "src/entrenamientos/27";
                                document.getElementById("georgina").innerHTML = "Flexión militar";
                                document.getElementById("karla").innerHTML = "5 series de 15 repeticiones.";
                                document.getElementById("sig").style.display = "none";
                                document.getElementById("sig2").style.display = "block";
                            }

                        }
                        document.getElementById("otro").onclick = function() {
                            var imagen = document.getElementById("foto");

                            if (fotoMostrada == "src/entrenamientos/27") {
                                imagen.src = "src/entrenamientos/28.gif";
                                fotoMostrada = "src/entrenamientos/28";
                                document.getElementById("georgina").innerHTML = "Flexión en diamante";
                                document.getElementById("karla").innerHTML = "5 series de 10 repeticiones.";
                            } else {
                                imagen.src = "src/entrenamientos/29.gif";
                                fotoMostrada = "src/entrenamientos/29";
                                document.getElementById("georgina").innerHTML = "Flexión abierta";
                                document.getElementById("karla").innerHTML = "5 series de 15 repeticiones.";
                                document.getElementById("sig2").style.display = "none";
                                document.getElementById("sig3").style.display = "block";
                            }
                        }
                        document.getElementById("otro1").onclick = function() {
                            var imagen = document.getElementById("foto");

                            if (fotoMostrada == "src/entrenamientos/29") {
                                imagen.src = "src/entrenamientos/30.gif";
                                fotoMostrada = "src/entrenamientos/30";
                                document.getElementById("georgina").innerHTML = "Flexión cerrada";
                                document.getElementById("karla").innerHTML = "5 series de 15 repeticiones.";
                            } else {
                                imagen.src = "src/entrenamientos/31.gif";
                                fotoMostrada = "src/entrenamientos/31";
                                document.getElementById("georgina").innerHTML = "Flexión con apoyo de base.";
                                document.getElementById("karla").innerHTML = "5 series de 15 repeticiones.";
                                document.getElementById("sig3").style.display = "none";
                                document.getElementById("sig4").style.display = "block";
                            }
                        }

                        document.getElementById("otro2").onclick = function() {
                            var imagen = document.getElementById("foto");

                            if (fotoMostrada == "src/entrenamientos/31") {
                                imagen.src = "src/entrenamientos/32.gif";
                                fotoMostrada = "src/entrenamientos/32";
                                document.getElementById("georgina").innerHTML = "Flexión escalonada";
                                document.getElementById("karla").innerHTML = "5 series de 15 repeticiones de cada lado.";

                                document.getElementById("otro2").style.display = "none";
                                document.getElementById("ekis").style.display = "block";
                            }
                            document.getElementById("terminar2").onclick = function() {
                                document.getElementById("mostrar2").style.display = "block";
                            }


                        }

                    }
                    repetir();







                }
                document.getElementById("gym1").onclick = function() {
                    document.getElementById("georgina1").innerHTML = "Press de banca plano";
                    document.getElementById("karla1").innerHTML = "10 series de 5 repeticiones con el máximo peso que puedas.";
                    var imagen = document.getElementById("foto1");
                    imagen.src = "src/entrenamientos/33.gif";

                    document.getElementById("casa1").style.display = "none";
                    document.getElementById("gym1").style.display = "none";
                    document.getElementById("jeje").innerHTML = "";
                    document.getElementById("rutinaGym").style.display = "block";


                    var fotoMostrada = "src/entrenamientos/33";

                    document.getElementById("bA").onclick = function() {
                        var imagen = document.getElementById("foto1");


                        if (fotoMostrada == "src/entrenamientos/33") {
                            imagen.src = "src/entrenamientos/34.gif";
                            fotoMostrada = "src/entrenamientos/34";
                            document.getElementById("georgina1").innerHTML = "Press de banca inclinado";
                            document.getElementById("karla1").innerHTML = "10 series de 5 repeticiones con el máximo peso que puedas.";
                        } else {
                            imagen.src = "src/entrenamientos/35.gif";
                            fotoMostrada = "src/entrenamientos/35";
                            document.getElementById("georgina1").innerHTML = "Press de banca declinado";
                            document.getElementById("karla1").innerHTML = "10 series de 5 repeticiones con el máximo peso que puedas.";
                            document.getElementById("bA").style.display = "none";
                            document.getElementById("bB").style.display = "block";
                        }

                    }

                    document.getElementById("bB").onclick = function() {
                        var imagen = document.getElementById("foto1");


                        if (fotoMostrada == "src/entrenamientos/35") {
                            imagen.src = "src/entrenamientos/36.gif";
                            fotoMostrada = "src/entrenamientos/36";
                            document.getElementById("georgina1").innerHTML = "Fondos";
                            document.getElementById("karla1").innerHTML = "50 repeticiones.";
                        } else {
                            imagen.src = "src/entrenamientos/37.gif";
                            fotoMostrada = "src/entrenamientos/37";
                            document.getElementById("georgina1").innerHTML = "Polea";
                            document.getElementById("karla1").innerHTML = "10 series de 5 repeticiones con el máximo peso que puedas.";
                            document.getElementById("bB").style.display = "none";
                            document.getElementById("bC").style.display = "block";
                        }

                    }

                    document.getElementById("bC").onclick = function() {
                        var imagen = document.getElementById("foto1");


                        if (fotoMostrada == "src/entrenamientos/37") {
                            imagen.src = "src/entrenamientos/38.gif";
                            fotoMostrada = "src/entrenamientos/38";
                            document.getElementById("georgina1").innerHTML = "Contractor pectoral.";
                            document.getElementById("karla1").innerHTML = "10 series de 5 repeticiones con el máximo peso que puedas.";
                        } else {
                            imagen.src = "src/entrenamientos/39.gif";
                            fotoMostrada = "src/entrenamientos/39";
                            document.getElementById("georgina1").innerHTML = "Press plano con barra";
                            document.getElementById("karla1").innerHTML = "10 series de 5 repeticiones con el máximo peso que puedas.";
                            document.getElementById("bC").style.display = "none";
                            document.getElementById("bD").style.display = "block";
                        }

                    }
                    document.getElementById("bD").onclick = function() {
                        var imagen = document.getElementById("foto1");


                        if (fotoMostrada == "src/entrenamientos/39") {
                            imagen.src = "src/entrenamientos/40.gif";
                            fotoMostrada = "src/entrenamientos/40";
                            document.getElementById("georgina1").innerHTML = "Estiramiento pectoral";
                            document.getElementById("karla1").innerHTML = "10 series de 5 repeticiones con el máximo peso que puedas.";
                            document.getElementById("bD").style.display = "none";
                            document.getElementById("terminar").style.display = "block";
                        }
                        document.getElementById("terminar").onclick = function() {
                            document.getElementById("mostrar3").style.display = "block";
                        }


                    }

                }
            }
            //Brazo
            document.getElementById("brazo").onclick = function() {

                document.getElementById("georgina").innerHTML = "Flexiones";
                document.getElementById("karla").innerHTML = "6 series de 15 repeticiones.";

                var imagen = document.getElementById("foto");
                imagen.src = "src/entrenamientos/25.gif";
                document.getElementById("rutina").innerHTML = "-BRAZO-";
                document.getElementById("desc").innerHTML = "Rutina para tus brazos.";

                document.getElementById("desaparecer").style.display = "none";
                document.getElementById("desapareceC").style.display = "none";
                document.getElementById("full").style.display = "block";

                document.getElementById("casa1").onclick = function() {
                    document.getElementById("casa1").style.display = "none";
                    document.getElementById("gym1").style.display = "none";
                    document.getElementById("jeje").innerHTML = "";
                    document.getElementById("rutinaCasa").style.display = "block";


                    var fotoMostrada = "src/entrenamientos/25";

                    function repetir() {
                        document.getElementById("sig").onclick = function() {
                            var imagen = document.getElementById("foto");


                            if (fotoMostrada == "src/entrenamientos/25") {
                                imagen.src = "src/entrenamientos/41.gif";
                                fotoMostrada = "src/entrenamientos/41";
                                document.getElementById("georgina").innerHTML = "Flexiones de tríceps.";
                                document.getElementById("karla").innerHTML = "6 series de 12 repeticiones.";
                            } else {
                                imagen.src = "src/entrenamientos/42.gif";
                                fotoMostrada = "src/entrenamientos/42";
                                document.getElementById("georgina").innerHTML = "Dips de tríceps";
                                document.getElementById("karla").innerHTML = "5 series de 15 repeticiones.";
                                document.getElementById("sig").style.display = "none";
                                document.getElementById("sig2").style.display = "block";
                            }

                        }
                        document.getElementById("otro").onclick = function() {
                            var imagen = document.getElementById("foto");

                            if (fotoMostrada == "src/entrenamientos/42") {
                                imagen.src = "src/entrenamientos/28.gif";
                                fotoMostrada = "src/entrenamientos/28";
                                document.getElementById("georgina").innerHTML = "Flexión en diamante";
                                document.getElementById("karla").innerHTML = "5 series de 10 repeticiones.";
                            } else {
                                imagen.src = "src/entrenamientos/43.gif";
                                fotoMostrada = "src/entrenamientos/43";
                                document.getElementById("georgina").innerHTML = "Elevaciones de hombro";
                                document.getElementById("karla").innerHTML = "5 series de 15 repeticiones.";
                                document.getElementById("sig2").style.display = "none";
                                document.getElementById("sig3").style.display = "block";
                            }
                        }
                        document.getElementById("otro1").onclick = function() {
                            var imagen = document.getElementById("foto");

                            if (fotoMostrada == "src/entrenamientos/43") {
                                imagen.src = "src/entrenamientos/30.gif";
                                fotoMostrada = "src/entrenamientos/30";
                                document.getElementById("georgina").innerHTML = "Flexión cerrada";
                                document.getElementById("karla").innerHTML = "5 series de 15 repeticiones.";
                            } else {
                                imagen.src = "src/entrenamientos/31.gif";
                                fotoMostrada = "src/entrenamientos/31";
                                document.getElementById("georgina").innerHTML = "Flexión con apoyo de base.";
                                document.getElementById("karla").innerHTML = "5 series de 15 repeticiones.";
                                document.getElementById("sig3").style.display = "none";
                                document.getElementById("sig4").style.display = "block";
                            }
                        }

                        document.getElementById("otro2").onclick = function() {
                            var imagen = document.getElementById("foto");

                            if (fotoMostrada == "src/entrenamientos/31") {
                                imagen.src = "src/entrenamientos/44.gif";
                                fotoMostrada = "src/entrenamientos/44";
                                document.getElementById("georgina").innerHTML = "Gancho lateral";
                                document.getElementById("karla").innerHTML = "5 series de 15 repeticiones de cada lado.";

                                document.getElementById("otro2").style.display = "none";
                                document.getElementById("ekis").style.display = "block";
                            }
                            document.getElementById("terminar2").onclick = function() {
                                document.getElementById("mostrar2").style.display = "block";
                            }


                        }

                    }
                    repetir();







                }
                document.getElementById("gym1").onclick = function() {
                    document.getElementById("georgina1").innerHTML = "Curl de bíceps";
                    document.getElementById("karla1").innerHTML = "10 series de 5 repeticiones con el máximo peso que puedas, de cada lado.";
                    var imagen = document.getElementById("foto1");
                    imagen.src = "src/entrenamientos/45.gif";

                    document.getElementById("casa1").style.display = "none";
                    document.getElementById("gym1").style.display = "none";
                    document.getElementById("jeje").innerHTML = "";
                    document.getElementById("rutinaGym").style.display = "block";


                    var fotoMostrada = "src/entrenamientos/45";

                    document.getElementById("bA").onclick = function() {
                        var imagen = document.getElementById("foto1");


                        if (fotoMostrada == "src/entrenamientos/45") {
                            imagen.src = "src/entrenamientos/46.gif";
                            fotoMostrada = "src/entrenamientos/46";
                            document.getElementById("georgina1").innerHTML = "Estiramiento de tríceps con polea";
                            document.getElementById("karla1").innerHTML = "10 series de 5 repeticiones con el máximo peso que puedas.";
                        } else {
                            imagen.src = "src/entrenamientos/47.gif";
                            fotoMostrada = "src/entrenamientos/47";
                            document.getElementById("georgina1").innerHTML = "Elevación de hombro";
                            document.getElementById("karla1").innerHTML = "10 series de 5 repeticiones con el máximo peso que puedas, de cada lado.";
                            document.getElementById("bA").style.display = "none";
                            document.getElementById("bB").style.display = "block";
                        }

                    }

                    document.getElementById("bB").onclick = function() {
                        var imagen = document.getElementById("foto1");


                        if (fotoMostrada == "src/entrenamientos/47") {
                            imagen.src = "src/entrenamientos/48.gif";
                            fotoMostrada = "src/entrenamientos/48";
                            document.getElementById("georgina1").innerHTML = "Elevación de hombros con mancuernas";
                            document.getElementById("karla1").innerHTML = "10 series de 5 repeticiones con el máximo peso que puedas.";
                        } else {
                            imagen.src = "src/entrenamientos/49.gif";
                            fotoMostrada = "src/entrenamientos/49";
                            document.getElementById("georgina1").innerHTML = "Golpes con polea";
                            document.getElementById("karla1").innerHTML = "10 series de 5 repeticiones con el máximo peso que puedas.";
                            document.getElementById("bB").style.display = "none";
                            document.getElementById("bC").style.display = "block";
                        }

                    }

                    document.getElementById("bC").onclick = function() {
                        var imagen = document.getElementById("foto1");


                        if (fotoMostrada == "src/entrenamientos/49") {
                            imagen.src = "src/entrenamientos/50.gif";
                            fotoMostrada = "src/entrenamientos/50";
                            document.getElementById("georgina1").innerHTML = "Extensión de tríceps con mancuerna";
                            document.getElementById("karla1").innerHTML = "10 series de 5 repeticiones con el máximo peso que puedas.";
                        } else {
                            imagen.src = "src/entrenamientos/51.gif";
                            fotoMostrada = "src/entrenamientos/51";
                            document.getElementById("georgina1").innerHTML = "Extensión de tríceps";
                            document.getElementById("karla1").innerHTML = "10 series de 5 repeticiones con el máximo peso que puedas.";
                            document.getElementById("bC").style.display = "none";
                            document.getElementById("bD").style.display = "block";
                        }

                    }
                    document.getElementById("bD").onclick = function() {
                        var imagen = document.getElementById("foto1");


                        if (fotoMostrada == "src/entrenamientos/51") {
                            imagen.src = "src/entrenamientos/52.gif";
                            fotoMostrada = "src/entrenamientos/52";
                            document.getElementById("georgina1").innerHTML = "Curl de bícep con barra";
                            document.getElementById("karla1").innerHTML = "10 series de 5 repeticiones con el máximo peso que puedas.";
                            document.getElementById("bD").style.display = "none";
                            document.getElementById("terminar").style.display = "block";
                        }
                        document.getElementById("terminar").onclick = function() {
                            document.getElementById("mostrar3").style.display = "block";
                        }


                    }

                }
            }
            //PIERNA
            document.getElementById("pierna").onclick = function() {

                document.getElementById("georgina").innerHTML = "Zancadas";
                document.getElementById("karla").innerHTML = "6 series de 15 repeticiones.";

                var imagen = document.getElementById("foto");
                imagen.src = "src/entrenamientos/53.gif";
                document.getElementById("rutina").innerHTML = "-PIERNA-";
                document.getElementById("desc").innerHTML = "Rutina para tus piernas.";

                document.getElementById("desaparecer").style.display = "none";
                document.getElementById("desapareceC").style.display = "none";
                document.getElementById("full").style.display = "block";

                document.getElementById("casa1").onclick = function() {
                    document.getElementById("casa1").style.display = "none";
                    document.getElementById("gym1").style.display = "none";
                    document.getElementById("jeje").innerHTML = "";
                    document.getElementById("rutinaCasa").style.display = "block";


                    var fotoMostrada = "src/entrenamientos/53";

                    function repetir() {
                        document.getElementById("sig").onclick = function() {
                            var imagen = document.getElementById("foto");


                            if (fotoMostrada == "src/entrenamientos/53") {
                                imagen.src = "src/entrenamientos/54.gif";
                                fotoMostrada = "src/entrenamientos/54";
                                document.getElementById("georgina").innerHTML = "Elevación de piernas en base";
                                document.getElementById("karla").innerHTML = "6 series de 12 repeticiones.";
                            } else {
                                imagen.src = "src/entrenamientos/55.gif";
                                fotoMostrada = "src/entrenamientos/55";
                                document.getElementById("georgina").innerHTML = "Elevación de talones";
                                document.getElementById("karla").innerHTML = "5 series de 15 repeticiones.";
                                document.getElementById("sig").style.display = "none";
                                document.getElementById("sig2").style.display = "block";
                            }

                        }
                        document.getElementById("otro").onclick = function() {
                            var imagen = document.getElementById("foto");

                            if (fotoMostrada == "src/entrenamientos/55") {
                                imagen.src = "src/entrenamientos/56.gif";
                                fotoMostrada = "src/entrenamientos/56";
                                document.getElementById("georgina").innerHTML = "Aleteos de pierna";
                                document.getElementById("karla").innerHTML = "5 series de 10 repeticiones.";
                            } else {
                                imagen.src = "src/entrenamientos/57.gif";
                                fotoMostrada = "src/entrenamientos/57";
                                document.getElementById("georgina").innerHTML = "Sentadilla con salto";
                                document.getElementById("karla").innerHTML = "5 series de 15 repeticiones.";
                                document.getElementById("sig2").style.display = "none";
                                document.getElementById("sig3").style.display = "block";
                            }
                        }
                        document.getElementById("otro1").onclick = function() {
                            var imagen = document.getElementById("foto");

                            if (fotoMostrada == "src/entrenamientos/57") {
                                imagen.src = "src/entrenamientos/58.gif";
                                fotoMostrada = "src/entrenamientos/58";
                                document.getElementById("georgina").innerHTML = "Elevación de piernas";
                                document.getElementById("karla").innerHTML = "5 series de 15 repeticiones de cada lado.";
                            } else {
                                imagen.src = "src/entrenamientos/59.gif";
                                fotoMostrada = "src/entrenamientos/59";
                                document.getElementById("georgina").innerHTML = "Pilates";
                                document.getElementById("karla").innerHTML = "5 series de 15 repeticiones cada lado.";
                                document.getElementById("sig3").style.display = "none";
                                document.getElementById("sig4").style.display = "block";
                            }
                        }

                        document.getElementById("otro2").onclick = function() {
                            var imagen = document.getElementById("foto");

                            if (fotoMostrada == "src/entrenamientos/59") {
                                imagen.src = "src/entrenamientos/60.gif";
                                fotoMostrada = "src/entrenamientos/60";
                                document.getElementById("georgina").innerHTML = "Sentadilla";
                                document.getElementById("karla").innerHTML = "5 series de 15 repeticiones de cada lado.";

                                document.getElementById("otro2").style.display = "none";
                                document.getElementById("ekis").style.display = "block";
                            }
                            document.getElementById("terminar2").onclick = function() {
                                document.getElementById("mostrar2").style.display = "block";
                            }


                        }

                    }
                    repetir();







                }
                document.getElementById("gym1").onclick = function() {
                    document.getElementById("georgina1").innerHTML = "Cuadríceps";
                    document.getElementById("karla1").innerHTML = "10 series de 5 repeticiones con el máximo peso que puedas.";
                    var imagen = document.getElementById("foto1");
                    imagen.src = "src/entrenamientos/61.gif";

                    document.getElementById("casa1").style.display = "none";
                    document.getElementById("gym1").style.display = "none";
                    document.getElementById("jeje").innerHTML = "";
                    document.getElementById("rutinaGym").style.display = "block";


                    var fotoMostrada = "src/entrenamientos/61";

                    document.getElementById("bA").onclick = function() {
                        var imagen = document.getElementById("foto1");


                        if (fotoMostrada == "src/entrenamientos/61") {
                            imagen.src = "src/entrenamientos/62.gif";
                            fotoMostrada = "src/entrenamientos/62";
                            document.getElementById("georgina1").innerHTML = "Prensa de piernas";
                            document.getElementById("karla1").innerHTML = "10 series de 5 repeticiones con el máximo peso que puedas.";
                        } else {
                            imagen.src = "src/entrenamientos/63.gif";
                            fotoMostrada = "src/entrenamientos/63";
                            document.getElementById("georgina1").innerHTML = "Femoral";
                            document.getElementById("karla1").innerHTML = "10 series de 5 repeticiones con el máximo peso que puedas.";
                            document.getElementById("bA").style.display = "none";
                            document.getElementById("bB").style.display = "block";
                        }

                    }

                    document.getElementById("bB").onclick = function() {
                        var imagen = document.getElementById("foto1");


                        if (fotoMostrada == "src/entrenamientos/63") {
                            imagen.src = "src/entrenamientos/64.gif";
                            fotoMostrada = "src/entrenamientos/64";
                            document.getElementById("georgina1").innerHTML = "Curl de piernas acostado";
                            document.getElementById("karla1").innerHTML = "10 series de 5 repeticiones con el máximo peso que puedas.";
                        } else {
                            imagen.src = "src/entrenamientos/65.gif";
                            fotoMostrada = "src/entrenamientos/65";
                            document.getElementById("georgina1").innerHTML = "Elevación de talón con barra";
                            document.getElementById("karla1").innerHTML = "10 series de 5 repeticiones con el máximo peso que puedas.";
                            document.getElementById("bB").style.display = "none";
                            document.getElementById("bC").style.display = "block";
                        }

                    }

                    document.getElementById("bC").onclick = function() {
                        var imagen = document.getElementById("foto1");


                        if (fotoMostrada == "src/entrenamientos/65") {
                            imagen.src = "src/entrenamientos/66.gif";
                            fotoMostrada = "src/entrenamientos/66";
                            document.getElementById("georgina1").innerHTML = "Elevación de pantorrillas";
                            document.getElementById("karla1").innerHTML = "10 series de 5 repeticiones con el máximo peso que puedas.";
                        } else {
                            imagen.src = "src/entrenamientos/67.gif";
                            fotoMostrada = "src/entrenamientos/67";
                            document.getElementById("georgina1").innerHTML = "Sentadilla con peso";
                            document.getElementById("karla1").innerHTML = "10 series de 5 repeticiones con el máximo peso que puedas.";
                            document.getElementById("bC").style.display = "none";
                            document.getElementById("bD").style.display = "block";
                        }

                    }
                    document.getElementById("bD").onclick = function() {
                        var imagen = document.getElementById("foto1");


                        if (fotoMostrada == "src/entrenamientos/67") {
                            imagen.src = "src/entrenamientos/68.gif";
                            fotoMostrada = "src/entrenamientos/68";
                            document.getElementById("georgina1").innerHTML = "Zancadas";
                            document.getElementById("karla1").innerHTML = "5 series de 10 repeticiones.";
                            document.getElementById("bD").style.display = "none";
                            document.getElementById("terminar").style.display = "block";
                        }
                        document.getElementById("terminar").onclick = function() {
                            document.getElementById("mostrar3").style.display = "block";
                        }


                    }

                }
            }
            //GLUTEO
            document.getElementById("gluteo").onclick = function() {

                document.getElementById("georgina").innerHTML = "Zancadas";
                document.getElementById("karla").innerHTML = "6 series de 15 repeticiones.";

                var imagen = document.getElementById("foto");
                imagen.src = "src/entrenamientos/53.gif";
                document.getElementById("rutina").innerHTML = "-GLÚTEO-";
                document.getElementById("desc").innerHTML = "Rutina para tus glúteos.";

                document.getElementById("desaparecer").style.display = "none";
                document.getElementById("desapareceC").style.display = "none";
                document.getElementById("full").style.display = "block";

                document.getElementById("casa1").onclick = function() {
                    document.getElementById("casa1").style.display = "none";
                    document.getElementById("gym1").style.display = "none";
                    document.getElementById("jeje").innerHTML = "";
                    document.getElementById("rutinaCasa").style.display = "block";


                    var fotoMostrada = "src/entrenamientos/53";

                    function repetir() {
                        document.getElementById("sig").onclick = function() {
                            var imagen = document.getElementById("foto");


                            if (fotoMostrada == "src/entrenamientos/53") {
                                imagen.src = "src/entrenamientos/69.gif";
                                fotoMostrada = "src/entrenamientos/69";
                                document.getElementById("georgina").innerHTML = "Elevación de piernas para glúteo";
                                document.getElementById("karla").innerHTML = "6 series de 12 repeticiones.";
                            } else {
                                imagen.src = "src/entrenamientos/70.gif";
                                fotoMostrada = "src/entrenamientos/70";
                                document.getElementById("georgina").innerHTML = "Sentadilla";
                                document.getElementById("karla").innerHTML = "5 series de 15 repeticiones.";
                                document.getElementById("sig").style.display = "none";
                                document.getElementById("sig2").style.display = "block";
                            }

                        }
                        document.getElementById("otro").onclick = function() {
                            var imagen = document.getElementById("foto");

                            if (fotoMostrada == "src/entrenamientos/70") {
                                imagen.src = "src/entrenamientos/71.gif";
                                fotoMostrada = "src/entrenamientos/71";
                                document.getElementById("georgina").innerHTML = "Zancadas";
                                document.getElementById("karla").innerHTML = "5 series de 10 repeticiones.";
                            } else {
                                imagen.src = "src/entrenamientos/57.gif";
                                fotoMostrada = "src/entrenamientos/57";
                                document.getElementById("georgina").innerHTML = "Sentadilla con salto";
                                document.getElementById("karla").innerHTML = "5 series de 15 repeticiones.";
                                document.getElementById("sig2").style.display = "none";
                                document.getElementById("sig3").style.display = "block";
                            }
                        }
                        document.getElementById("otro1").onclick = function() {
                            var imagen = document.getElementById("foto");

                            if (fotoMostrada == "src/entrenamientos/57") {
                                imagen.src = "src/entrenamientos/72.gif";
                                fotoMostrada = "src/entrenamientos/72";
                                document.getElementById("georgina").innerHTML = "Sentadilla con silla";
                                document.getElementById("karla").innerHTML = "5 series de 15 repeticiones.";
                            } else {
                                imagen.src = "src/entrenamientos/73.gif";
                                fotoMostrada = "src/entrenamientos/73";
                                document.getElementById("georgina").innerHTML = "Zancada con apoyo de silla";
                                document.getElementById("karla").innerHTML = "5 series de 15 repeticiones cada lado.";
                                document.getElementById("sig3").style.display = "none";
                                document.getElementById("sig4").style.display = "block";
                            }
                        }

                        document.getElementById("otro2").onclick = function() {
                            var imagen = document.getElementById("foto");

                            if (fotoMostrada == "src/entrenamientos/73") {
                                imagen.src = "src/entrenamientos/74.gif";
                                fotoMostrada = "src/entrenamientos/74";
                                document.getElementById("georgina").innerHTML = "Extensión de glúteo en una pierna con silla";
                                document.getElementById("karla").innerHTML = "5 series de 15 repeticiones de cada lado.";

                                document.getElementById("otro2").style.display = "none";
                                document.getElementById("ekis").style.display = "block";
                            }
                            document.getElementById("terminar2").onclick = function() {
                                document.getElementById("mostrar2").style.display = "block";
                            }


                        }

                    }
                    repetir();







                }
                document.getElementById("gym1").onclick = function() {
                    document.getElementById("georgina1").innerHTML = "Extensión de glúteos";
                    document.getElementById("karla1").innerHTML = "10 series de 5 repeticiones con el máximo peso que puedas.";
                    var imagen = document.getElementById("foto1");
                    imagen.src = "src/entrenamientos/75.gif";

                    document.getElementById("casa1").style.display = "none";
                    document.getElementById("gym1").style.display = "none";
                    document.getElementById("jeje").innerHTML = "";
                    document.getElementById("rutinaGym").style.display = "block";


                    var fotoMostrada = "src/entrenamientos/75";

                    document.getElementById("bA").onclick = function() {
                        var imagen = document.getElementById("foto1");


                        if (fotoMostrada == "src/entrenamientos/75") {
                            imagen.src = "src/entrenamientos/76.gif";
                            fotoMostrada = "src/entrenamientos/76";
                            document.getElementById("georgina1").innerHTML = "Elevación en caja con peso";
                            document.getElementById("karla1").innerHTML = "10 series de 5 repeticiones con el máximo peso que puedas.";
                        } else {
                            imagen.src = "src/entrenamientos/77.gif";
                            fotoMostrada = "src/entrenamientos/77";
                            document.getElementById("georgina1").innerHTML = "Elevación de glúteo con banda elástica";
                            document.getElementById("karla1").innerHTML = "5 series de 10 repeticiones.";
                            document.getElementById("bA").style.display = "none";
                            document.getElementById("bB").style.display = "block";
                        }

                    }

                    document.getElementById("bB").onclick = function() {
                        var imagen = document.getElementById("foto1");


                        if (fotoMostrada == "src/entrenamientos/77") {
                            imagen.src = "src/entrenamientos/64.gif";
                            fotoMostrada = "src/entrenamientos/64";
                            document.getElementById("georgina1").innerHTML = "Curl de piernas acostado";
                            document.getElementById("karla1").innerHTML = "10 series de 5 repeticiones con el máximo peso que puedas.";
                        } else {
                            imagen.src = "src/entrenamientos/78.gif";
                            fotoMostrada = "src/entrenamientos/78";
                            document.getElementById("georgina1").innerHTML = "Elevación de glúteos con salto";
                            document.getElementById("karla1").innerHTML = "5 series de 10 repeticiones.";
                            document.getElementById("bB").style.display = "none";
                            document.getElementById("bC").style.display = "block";
                        }

                    }

                    document.getElementById("bC").onclick = function() {
                        var imagen = document.getElementById("foto1");


                        if (fotoMostrada == "src/entrenamientos/78") {
                            imagen.src = "src/entrenamientos/79.gif";
                            fotoMostrada = "src/entrenamientos/79";
                            document.getElementById("georgina1").innerHTML = "Sentadilla con peso";
                            document.getElementById("karla1").innerHTML = "10 series de 5 repeticiones con el máximo peso que puedas.";
                        } else {
                            imagen.src = "src/entrenamientos/80.gif";
                            fotoMostrada = "src/entrenamientos/80";
                            document.getElementById("georgina1").innerHTML = "Peso muerto";
                            document.getElementById("karla1").innerHTML = "10 series de 5 repeticiones con el máximo peso que puedas.";
                            document.getElementById("bC").style.display = "none";
                            document.getElementById("bD").style.display = "block";
                        }

                    }
                    document.getElementById("bD").onclick = function() {
                        var imagen = document.getElementById("foto1");


                        if (fotoMostrada == "src/entrenamientos/80") {
                            imagen.src = "src/entrenamientos/81.gif";
                            fotoMostrada = "src/entrenamientos/81";
                            document.getElementById("georgina1").innerHTML = "Extensión de glúteos en una pierna";
                            document.getElementById("karla1").innerHTML = "5 series de 10 repeticiones de cada lado.";
                            document.getElementById("bD").style.display = "none";
                            document.getElementById("terminar").style.display = "block";
                        }
                        document.getElementById("terminar").onclick = function() {
                            document.getElementById("mostrar3").style.display = "block";
                        }


                    }

                }
            }
        </script>
    </main>

</body>

</html>