<?php 
    session_start();

    require 'php/fb-init.php';

    $login_url = $helper->getLoginUrl('http://localhost/astraFit/php/api-login.php', $permissions);
?>
<!DOCTYPE html>
<html lang = es>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href = "src/css/styles.css" type ="TEXT/CSS">
        <link rel="icon" type="image/png" href="src/img/logo.png" sizes="64x64">
        <title>Login</title>
    </head>

    <body>
        <header class="right main-header">
            <div class="full-menu">
                <ul class="">
                    <li><a href="index.php">INICIO</a></li>
                    <li><a href="entrenamiento.php">ENTRENAMIENTO</a></li>
                    <li><a href="calculadora.php">CALCULADORA</a></li>
                    <li><a href="motivaciones.php">MOTIVACION</a></li>
                    <li><a href="cerrarSesion.php">CERRAR SESIÓN</a></li>
                </ul>
            </div>
            <nav>
                <div class="trigger show">
                    <svg class="bars" viewBox="0 0 100 100" onclick="this.classList.toggle('active');document.querySelector('.full-menu').classList.toggle('opened');">
                        <path class="line top" d="m 30,33 h 40 c 13.100415,0 14.380204,31.80258 6.899646,33.421777 -24.612039,5.327373 9.016154,-52.337577 -12.75751,-30.563913 l -28.284272,28.284272"></path>
                        <path class="line middle" d="m 70,50 c 0,0 -32.213436,0 -40,0 -7.786564,0 -6.428571,-4.640244 -6.428571,-8.571429 0,-5.895471 6.073743,-11.783399 12.286435,-5.570707 6.212692,6.212692 28.284272,28.284272 28.284272,28.284272"></path>
                        <path class="line bottom" d="m 69.575405,67.073826 h -40 c -13.100415,0 -14.380204,-31.80258 -6.899646,-33.421777 24.612039,-5.327373 -9.016154,52.337577 12.75751,30.563913 l 28.284272,-28.284272"></path>
                    </svg>

                </div>
            </nav>
        </header>
        <main>
            <section class="register-container">
                <div class="form-container">
                    <div class="status-bar">
                        <div style="width: -0%"></div>
                    </div>
                    <div class="form-content">
                        <header>
                            <h1>INICIA SESIÓN</h1>
                            <p>¿No tienes una cuenta?</p>
                            <a href="registro.php">¡Registrate aquí!</a>
                        </header>
                        <form class="inline-form-text" autocomplete="on" id="loginForm">
                        <div>
                                <label for="email">
                                    <p>Correo electrónico</p>
                                </label>
                                <div>
                                    <input type="text" name="email" id="email" pattern="[0-9]+(\.[0-9]*)?" required min="">
                                </div>
                            </div>
                            <div>
                                <label for="contrasena">
                                    <p>Contraseña</p>
                                </label>
                                <div>
                                    <input type="password" name="contrasena" id="contrasena" pattern="[0-9]+(\.[0-9]*)?" required min="">
                                </div>
                                <div class="next buttonLabel" id="validarDatosCuenta">
                                    <label for="validarDatosCuenta">Iniciar Sesión</label>
                                </div>
                                <div>
                                    <?php echo '<a href="'. $login_url .'" class="facebook-login">Inicia sesión con Facebook <img src="src/img/logo-de-facebook.svg"></a>'; ?>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="form-content hide sucessblack">
                        <h1>¡INICIANDO SESIÓN!</h1>
                        <h3>Serás direccionado a tu progeso...</h3>
                    </div>
                </div>
            </section>
        </main>
    </body>
    <script src ="src/js/login.js"></script>
    <script src ="src/js/commun.js"></script>
</html>