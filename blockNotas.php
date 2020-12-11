<?php
session_start();

if (isset($_SESSION['idUsuario']) && $_SESSION['idUsuario'] != '') {
    include_once('php/database.php');
    $conexion = Conexion::Conectar();
    $funcionesDB = new funcionesDB;

} else {
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang=es>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/styles.css" type="TEXT/CSS">
    <link rel="icon" type="image/png" href="src/img/logo.png" sizes="64x64">
    <title>Bloc de Notas </title>
</head>

<body>
    <?php include_once('php/handlebars/header.php'); ?>    
            
          <!--PORTADA -->

          <main>     
                <div id="desaparecer" style="display: block;">   
                <section class="background background-image-18">
                    <div class="background-filter"></div>
                    <div class="image-18">
                        <h1 class="titulo">Bloc de Notas  </h1>
                        <h2>¡Reflexiona un minuto, tomate un tiempo!</h2>
                    </div>
                </section>
                <section class="divider hide-on-small-and-down" style="border-color: transparent transparent #ffffff transparent;">
                </section>
                <section class="strava-information" style="background-color: #ffffff;">
                    <div class="strava-data-container">
                        <div class="container" >
                            <div class="notes">
                                <div>
                                    <h1>Tus notas: <?php echo $_SESSION['nombreUsuario']?></h1>
                                    <a class="strava-login" id="AgregarNotas" style="background-color: #126fbb">Agregar una nueva nota <img src="imagenes/signo.png"></a>
                                </div>
                                <div id="box" style="display: none;" class="note">
                                    <form id="create-note-form" onsubmit="return false">
                                        <label for="">Titulo</label>
                                        <input type="text" name="Titulo">
                                        <Label>Descripcion</Label>
                                        <input type="text" name="Descripcion">
                                        <label for="">Contenido</label>
                                        <textarea name="Contenido" id="Contenidos"></textarea>
                                        <a id="createNote" class="strava-login" id="AgregarNotas" style="background-color: #126fbb">Crear nota<img src="imagenes/signo.png"></a>
                                    </form>
                                </div>
                                <?php 
                                    $notas = $funcionesDB->obtenerNotasUsuario($conexion, $_SESSION['idUsuario']);
                                    if (count($notas) > 0) {
                                        foreach ($notas as $nota) {
                                            echo '
                                                <div class="note">
                                                    <form id="form-note-' . $nota['idNota'] . '" class="form-note" action="" name="crearNota">
                                                        <label for="Titulo">Titulo</label>
                                                        <input name="Titulo" type="text" value="' . $nota['titulo'] .'">
                                                        <Label for = "Descripcion">Descripcion</Label>
                                                        <input name="Descripcion" type="text" value="' . $nota['descripcion'] . '">
                                                        <label for="">Contenido</label>
                                                        <textarea name="Contenido" id="Contenido" value="'. $nota['contenido'] .'">'.$nota['contenido'].'</textarea>
                                                        <a id="createNote" class="strava-login" id="eliminarNota" style="background-color: #126fbb" onclick=(eliminarNota(this.parentNode))>Eliminar nota <img src="src/img/signo-menos.svg"></a>
                                                    </form>
                                                </div>
                                            ';
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </section>
             <!--FIN DE PORTADA  -->            
              


                <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

            </section>
            <footer>
                <div>
                    <h3>Productos</h3>
                    <ul>
                        <li><a href="entrenamiento.php">ENTRENAMIENTO</a></li>
                        <li><a href="calculadora.php">NUTRICIÓN</a> </li>
                        <li><a href="blockNotas.php">NOTAS</a></li>
                        <li><a href="stravaUserData.php">STRAVA</a></li>
                        <li><a href="motivaciones.php">MOTIVACIÓN</a></li>
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
                        <li><a href="index.php">QUIENES SOMOS</a></li>
                    </ul>
                </div>
            </footer>
        </main>
    </body>
</html>

<script type="text/javascript">
     document.getElementById("AgregarNotas").onclick=function()
     {
        document.getElementById("box").style.display="block";

     }

     document.getElementById("createNote").onclick=function()
     {
        document.getElementById("box").style.display="none";

     }
</script>

<script src="src/js/create-note.js"></script>