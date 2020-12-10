<?php
session_start();

if (isset($_SESSION['idUsuario']) && $_SESSION['idUsuario'] != '') {

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
    <link rel="stylesheet" href="src/css/stails.css" type="TEXT/CSS">
    <link rel="stylesheet" href="src/css/block.css" type="TEXT/CSS">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="src/img/logo.png" sizes="64x64">
    <title>Bloc de Notas </title>
</head>

<body>
    <?php include_once('php/handlebars/header.php'); ?>    

            
          <!--PORTADA -->

          <main>     
                <div id="desaparecer" style="display: block;">   
                <section class="background background-image-9">
                    <div class="background-filter"></div>
                    <div class="image-9">
                        <h1 class="titulo">Bloc de Notas  </h1>
                    </div>
                </section>
                <section class="divider hide-on-small-and-down">
                </section>            
                <section class="information">
             <!--FIN DE PORTADA  -->            
              


                <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

                <div id="information3 ">
                    <button id="AgregarNotas" class="buttonAgregar"> <img class="imagencompleta" src="imagenes/signo.png" >                 </button>
                 <div id="notas">
                <div id="nota">
                    <span class="TituloNota">Titulo :</span> <span class="TextoNota">            </span> <br>
                    <span class="TituloNota">Descripción :</span> <span class="TextoNota">              </span><br>
                    <span class="TituloNota">Contenido </span> <br>  <span class="TextoNota">fhhfhfhhfhfs               </span><br>
                    <span class="Fecha">Fecha</span> <span class="ContenidoFecha"> 13 /02 /Diciembre</span>
                </div>
                
                
                
                </div>

                    <div id="box" style="display: none; text-align: center;">

                        <label for="Titulo"> <span class="TituloFormulario">Titulo</span> </label>
                        <input type="text" class="formulario" name="titulo" id="Titulo">



                        <label for="Descripcion" class="TopDescripcion"> <span class="TituloFormulario">Descripcion</span> </label><br>
                        <input type="text" class="formulario" name="descripcion" id="Descripcion">

                        <label for="Descripcion" class="TopContenido"> <span class="TituloFormulario">Contenido</span> </label><br>
                        <input type="text" class="formularioContenido" name="descripcion" id="Descripcion">
                        <button id="MandarInformacion" class="ButtonInformacion"> Enviar</button>


                    </div>


                </div>
            </section>
        </main>
    </body>
</html>

<script type="text/javascript">
     document.getElementById("AgregarNotas").onclick=function()
     {
        document.getElementById("box").style.display="block";
        document.getElementById("notas").style.display="none";

     }

     document.getElementById("MandarInformacion").onclick=function()
     {
        document.getElementById("box").style.display="none";
        document.getElementById("notas").style.display="block";

     }


</script>