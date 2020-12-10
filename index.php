<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang = es>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href = "src/css/styles.css" type ="TEXT/CSS">
        <link rel="icon" type="image/png" href="src/img/logo.png" sizes="64x64">
        <title>AstraFit</title>
    </head>

    <body>
    <header class="right main-header transparent">
            <div class="full-menu">
                <ul class="">
                    <li><a href="index.php">INICIO</a></li>
                    <li><a href="entrenamiento.php.php">ENTRENAMIENTO</a></li>
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
                    <li><a href="entrenamiento.php.php">ENTRENAMIENTO</a></li>
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
        <main>
            <section class="background background-image-1">
                <div class="background-filter"></div>
                <div>
                    <h1>ASTRAFIT</h1>
                    <H2>LA SALUD NO LO ES TODO, PERO SIN ELLA TODO LO DEMÁS ES NADA</H2>
                    <a href="registro.php">¡EMPIEZA YA!</a>
                </div>
            </section>
            <section class="divider hide-on-small-and-down">
            </section>
            <section class="information">
                <div class="cards">
                    <div class="card">
                        <div class="card-image">
                            <img src="src/img/NUTRICION.jpg" alt="">
                        </div>
                        <div class="card-content" style="text-align:center;"">
                            <h2>NUTRICIÓN</h2>
                            <p>Dietas totalmente libres de escoger a gusto propio.</p>
                        </div>
                    </div>
                    <div class="card text-align-end">
                        <div class="card-image">
                            <img src="src/img/ENTRENAMIENTO.jpg" alt="">
                        </div>
                        <div class="card-content" style="text-align:center;">
                            <h2>ENTRENAMIENTO</h2>
                            <p>Ejercicios y entrenamientos diferentes para cualquier músculo del cuerpo.</p>
                        </div>
                    </div>
                    <div class="card text-align-center">
                        <div class="card-image">
                            <img src="src/img/MOTIVACION.jpg" alt="">
                        </div>
                        <div class="card-content">
                            <h2>MOTIVACIÓN</h2>
                            <p>Consejos y motivaciones para cualquier tipo de público.</p>
                        </div>
                    </div>
                  </div>
            </section>
            <section class="footerInformation">
                <div>
                    <img src="src/img/smartphone.png" alt="">
                </div>
                <div>
                    <h2>ENTRENA CUANDO Y DONDE QUIERAS CON ASTRAFIT</h2>
                    <a href="registro.php">¡EMPIEZA YA!</a>
                </div>
                <div>
                    <img src="src/img/laptop-template2.png" alt="">
                </div>
            </section>
            <footer>
                <div>
                    <h3>Productos</h3>
                    <ul>
                        <li><a href="">ENTRENAMIENTO</a></li>
                        <li><a href="">NUTRICIÓN</a> </li>
                        <li><a href="">SUPLEMENTOS</a></li>
                        <li><a href="calculadora.html">CALCULADORAS</a></li>
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
    <script src ="src/js/commun.js"></script>
    <script src ="src/js/transparentNavbar.js"></script>
</html>