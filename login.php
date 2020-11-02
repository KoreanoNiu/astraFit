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
        <title>Main index</title>
    </head>

    <body>
        <header>
            <nav class="fixed closed">
                <a href = "" class = "brand-logo center"><img src="src/img/logo.png" alt=""></a>
                <div class="sidenav-trigger right">
                    <button class="menu" onclick="this.parentNode.parentNode.classList.toggle('opened');this.parentNode.parentNode.classList.toggle('closed');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu">
                        <svg width="40" height="40" viewBox="0 0 100 100">
                          <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                          <path class="line line2" d="M 20,50 H 80" />
                          <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                        </svg>
                      </button>
                </div>
                <div class="sidenav-trigger left hide">
                    <button class="backForm">
                        <svg viewBox="0 0 100 152" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 76l79 76 19-18-61-59 63-56L80 0z"></path>
                        </svg>
                    </button>
                </div>
                <!--ESta cerrado por el hide-->
                <aside class="show">
                    <div>
                        <ul>
                            <li><a href="">Entrenamiento</a></li>
                            <li><a href="">Nutrcición</a></li>
                            <li><a href="">Nosotros</a></li>
                            <li><a href="">Contacto</a></li>
                            <li><div class="buttom"><a href="">Cerrar sesión</a></div></li>
                        </ul>
                    </div>
                    <div>
                    </div>
                </aside>
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
                        <form class="inline-form-text" autocomplete="off" id="loginForm">
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
                                    <label for="validarDatosCuenta">Enviar</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="form-content hide sucessblack">
                        <h1>¡INICIANDO SESION!</h1>
                        <h3>Serás direccionado a tu progeso...</h3>
                    </div>
                </div>
            </section>
        </main>
    </body>
    <script src ="src/js/login.js"></script>
</html>