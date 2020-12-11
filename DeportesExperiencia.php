<?php 
    session_start();

    if(isset($_SESSION['idUsuario']) && $_SESSION['idUsuario'] != ''){
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
        <link rel = "stylesheet" href = "src/css/stails.css" type ="TEXT/CSS">
        <link rel = "stylesheet" href = "src/css/motivaciones.css" type ="TEXT/CSS">
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="src/img/logo.png" sizes="64x64">
        <title>Deporte /Intensos  </title>
    </head>

    <body>
        <?php include_once('php/handlebars/header.php'); ?>
          <!--PORTADA -->

            <main>     
                <div id="desaparecer" style="display: block;">   
                <section class="background background-image-17">
                    <div class="background-filter"></div>
                    <div class="image-17">
                        <h1 class="titulo">Deportes Intensos</h1>
                      
                    </div>
                </section>

                <section class="divider hide-on-small-and-down">
                </section>            
                <section class="information">
             <!--FIN DE PORTADA  -->            
             
    
    
        <!-- CARDS GIRATORIAS  -->
    <div id="SecionTip">

        <!--CARD GIRATORIA -->
         <div class = "contenidos" style="margin-top: 7vw;">
             <div class = "imagen">
             <div class = "parteDelantera">
                 <p class = "TituloGiratorio">Artes Marciales </p>
             <img class = "derecha2" src="imagenes/deportes/artesMarciales.jpg" width="100%" height="100%">
             </div>
             <div class = "parteTrasera">
                 <p class = "TituloGiratorio">Artes Marciales </p>
                 <img class = "derecha2" src="imagenes/enfocarse.jpg" width="100%" height="100%">
             </div>
             </div>
             </div><!--CARD GIRATORIA -->
 
 
      <!--CARD GIRATORIA -->
         <div class = "contenidos" style="margin-top: 7vw;">
             <div class = "imagen">
             <div class = "parteDelantera">
                 <p class = "TituloGiratorio">Baloncesto </p>
             <img class = "derecha2" src="imagenes/deportes/baloncesto.jpg" width="100%" height="100%">
             </div>
             <div class = "parteTrasera">
                 <p class = "TituloGiratorio">Baloncesto  </p>
                 <img class = "derecha2" src="imagenes/buenoshabitos.jpg" width="100%" height="100%">
             </div>
             </div>
             </div><!--CARD GIRATORIA -->
 
 
 
              <!--CARD GIRATORIA -->
         <div class = "contenidos" style="margin-top: 7vw;">
             <div class = "imagen">
             <div class = "parteDelantera">
                 <p class = "TituloGiratorio">Boxeo </p>
             <img class = "derecha2" src="imagenes/deportes/boxeo.jpg" width="100%" height="100%">
             </div>
             <div class = "parteTrasera">
                 <p class = "TituloGiratorio">Boxeo </p>
                 <img class = "derecha2" src="imagenes/confianza.jpg" width="100%" height="100%">
             </div>
             </div>
             </div><!--CARD GIRATORIA -->
 
 
              <!--CARD GIRATORIA -->
         <div class = "contenidos" style="margin-top: 7vw;">
             <div class = "imagen">
             <div class = "parteDelantera">
                 <p class = "TituloGiratorio">Croosfit </p>
             <img class = "derecha2" src="imagenes/deportes/croosfit.jpg" width="100%" height="100%">
             </div>
             <div class = "parteTrasera">
                 <p class = "TituloGiratorio"> Croosfit</p>
                 <img class = "derecha2" src="imagenes/persistencia.jpg" width="100%" height="100%">
             </div>
             </div>
             </div><!--CARD GIRATORIA -->

             <!--CARD GIRATORIA -->
         <div class = "contenidos" style="margin-top: 7vw;">
            <div class = "imagen">
            <div class = "parteDelantera">
                <p class = "TituloGiratorio">FutbolAmericano </p>
            <img class = "derecha2" src="imagenes/deportes/futbolAmericano.jpg" width="100%" height="100%">
            </div>
            <div class = "parteTrasera">
                <p class = "TituloGiratorio"> FutbolAmericano</p>
                <img class = "derecha2" src="imagenes/persistencia.jpg" width="100%" height="100%">
            </div>
            </div>
            </div><!--CARD GIRATORIA -->


             <!--CARD GIRATORIA -->
         <div class = "contenidos" style="margin-top: 7vw;">
            <div class = "imagen">
            <div class = "parteDelantera">
                <p class = "TituloGiratorio">Hockey </p>
            <img class = "derecha2" src="imagenes/deportes/hockey.jpg" width="100%" height="100%">
            </div>
            <div class = "parteTrasera">
                <p class = "TituloGiratorio"> Hockey</p>
                <img class = "derecha2" src="imagenes/persistencia.jpg" width="100%" height="100%">
            </div>
            </div>
            </div><!--CARD GIRATORIA -->
             <!--CARD GIRATORIA -->
         <div class = "contenidos" style="margin-top: 7vw;">
            <div class = "imagen">
            <div class = "parteDelantera">
                <p class = "TituloGiratorio">Lucha Libre </p>
            <img class = "derecha2" src="imagenes/deportes/luchaLibre.jpg" width="100%" height="100%">
            </div>
            <div class = "parteTrasera">
                <p class = "TituloGiratorio"> Lucha Libre </p>
                <img class = "derecha2" src="imagenes/persistencia.jpg" width="100%" height="100%">
            </div>
            </div>
            </div><!--CARD GIRATORIA -->


             <!--CARD GIRATORIA -->
         <div class = "contenidos" style="margin-top: 7vw;">
            <div class = "imagen">
            <div class = "parteDelantera">
                <p class = "TituloGiratorio">Tenis </p>
            <img class = "derecha2" src="imagenes/deportes/tenis.jpg" width="100%" height="100%">
            </div>
            <div class = "parteTrasera">
                <p class = "TituloGiratorio"> Tenis </p>
                <img class = "derecha2" src="imagenes/persistencia.jpg" width="100%" height="100%">
            </div>
            </div>
            </div><!--CARD GIRATORIA -->
            
 
 
             </div><!--FIN DE CARDS GIRATORIAS -->
        </section>    


<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
