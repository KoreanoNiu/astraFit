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
                <div class="sidenav-trigger left">
                    <!--Aqui iria el icono del carrito xd-->
                </div>
                <!--ESta cerrado por el hide-->
                <aside class="show">
                    <div>
                        <ul>
                        <li><a href="entrenamiento.html">Entrenamiento</a></li>
                            <li><a href="">Nutrición</a></li>
                            <li><a href="">Nosotros</a></li>
                            <li><a href="">Contacto</a></li>
                            <li><a href="calculadora.html">Calculadora</a></li>
                        </ul>
                    </div>
                    <div>
                    </div>
                </aside>
                <ul class="hide-on-small-and-down">
                <li><a href="entrenamiento.html">Entrenamiento</a></li>
                            <li><a href="">Nutrición</a></li>
                            <li><a href="">Nosotros</a></li>
                            <li><a href="">Contacto</a></li>
                            <li><a href="calculadora.html">Calculadora</a></li>
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
    <script src =""></script>
</html>