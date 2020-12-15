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
        <title>CONTACTO</title>
    </head>

    <body>
    <header class="right main-header transparent">
            <div class="full-menu">
                <ul class="">
                    <li><a href="index.php">INICIO</a></li>
                    <li><a href="entrenamiento.php">ENTRENAMIENTO</a></li>
                    <li><a href="calculadora.php" >CALCULADORA</a></li>
                    <li><a href="motivaciones.php" >MOTIVACIÓN</a></li>
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
                    <li><a href="entrenamiento.php">ENTRENAMIENTO</a></li>
                    <li><a href="calculadora.php" >CALCULADORA</a></li>
                    <li><a href="motivaciones.php" >MOTIVACIÓN</a></li>
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
            <section class="contact" id="contact">
                <h1>CONTACTO</h1>
                <div class="divisor">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="6" viewBox="0 0 60 6">
                        <rect width="25.594" height="1.5"/>
                        <rect id="Rectangle_1_copy_2" data-name="Rectangle 1 copy 2" x="34.406" width="25.594" height="1.5"/>
                        <rect id="Rectangle_1_copy" data-name="Rectangle 1 copy" x="27" width="6" height="1.5"/>
                        <rect id="Rectangle_1_copy_3" data-name="Rectangle 1 copy 3" x="13.5" y="4.5" width="25.594" height="1.5" rx="0.5" ry="0.5"/>
                        <rect id="Rectangle_1_copy_3-2" data-name="Rectangle 1 copy 3" x="40.5" y="4.5" width="6" height="1.5" rx="0.5" ry="0.5"/>
                      </svg>
                </div>
                <form class="contact-container" onsubmit="enviarFormulario(); return false" method="POST">
                    <input name="nombre"type="text" placeholder="Nombre" required>
                    <input name="asunto"type="text" placeholder="Asunto" required>
                    <input name="email"type="email" placeholder="Correo electrónico" required>
                    <textarea name="mensaje" placeholder="Mensaje" required></textarea>
                    <button type="submit" class="enviar">
                        ENVIAR
                        <img src="src/img/paper-plane.svg" alt="">
                    </button>
                </form>
            </section>
            <?php include_once('php/handlebars/footer.php'); ?>
        </main>
        <?php include_once('php/handlebars/error.php'); ?>
    </body>
    <script src="src/js/contact.js"></script>
    <script src="src/js/photo-profile.js"></script>
    <script src ="src/js/commun.js"></script>
</html>