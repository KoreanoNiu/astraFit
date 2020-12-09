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
        <title>Motivacion  </title>
    </head>

    <body>
        <?php include_once('php/handlebars/header.php'); ?>
        <body>
            
          <!--PORTADA -->

            <main>     
                <div id="desaparecer" style="display: block;">   
                <section class="background background-image-6">
                    <div class="background-filter"></div>
                    <div class="image-7">
                        <h1 class="titulo">Motivaciones </h1>
                        <h2>¿Piensas estarte quieto para siempre ?</h2>
                    </div>
                </section>
                <section class="divider hide-on-small-and-down">
                </section>            
                <section class="information">
             <!--FIN DE PORTADA  -->            
              


<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

                                        
                    <div class="cards">
                        <div class="card #cardMediana">
                            <div class="card-image">
                                <img src="imagenes/espiritualidad.jpg" class="completa" alt="">
                            </div>
                            <div class="card-content" style="text-align:center;">
                                <h2>ESPIRITUAL</h2>
                                <p>No se quien eres , sino quien puedes ser .</p>
                                <button class="botonon2" id="espiritual">¡EMPEZEMOS!</button>
                            </div>
                        </div>

    
                        <div class="card">
                            <div class="card-image">
                                <img src="imagenes/intensidad.jpg" class="completa" alt="">
                            </div>
                            <div class="card-content" style="text-align:center;">
                                <h2>INTENSA </h2>
                                <p>Hagas lo que hagas, hazlo intensamente</p>
                                <button class="botonon2" id="intensidad">¡EMPEZEMOS!</button>
                            </div>
                        </div>
    
                        <div class="card">
                            <div class="card-image">
                                <img src="imagenes/ligero.jpeg" class="completa" alt="">
                            </div>
                            <div class="card-content" style="text-align:center;">
                                <h2>RELAJADA</h2>
                                <p>Tan solo juega, diviértete, disfruta del juego</p>
                                <button class="botonon2" id="relajado">¡EMPEZEMOS!</button>
                            </div>
                        </div>
    
                        <div class="card">
                            <div class="card-image">
                                <img src="imagenes/experiencia.jpg" class="completa" alt="">
                            </div>
                            <div class="card-content" style="text-align:center;">
                                <h2>CON EXPERIENCIA </h2>
                                <p>Si entrenas lo suficiente, no solo te vas a endurecer, sino que además serás duro de derrotar</p>
                                <button class="botonon2" id="experiencia">¡EMPEZEMOS!</button>
                            </div>
                        </div>
    
                        <div class="card">
                            <div class="card-image">
                                <img src="imagenes/novato.jpg"  class="completa" alt="">
                            </div>
                            <div class="card-content" style="text-align:center;">
                                <h2>NOVATO</h2>
                                <p>El comienzo es el momento más importante del trabajo</p>
                                <button class="botonon2" id="novato">¡EMPEZEMOS!</button>
                            </div>
                        </div>
    
                    
    
    
                    </div>
                </div>
    <br><br>

         
          <!--SECIONES PERSONALIZADAS -->



                 <div id="intensaMotivacion" style="display: none; text-align: center; " >
                   




<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

                           <!--Motivaciones Intesas  -->
                                <section class="background background-image-3">
                                    <div class="background-filter"></div>
                                    <div class="image-3">
                                        <h1 >INTENSO </h1>
                                        <h2>Hagas lo que hagas, hazlo intensamente</h2>
                                    </div>
                                </section>
                                <section class="divider hide-on-small-and-down">
                                </section> 
                                <section class="information">

                                 
                                    <div class="cards">
                                        
                               <div class="card">
                            <div class="card-image">
                                <iframe  src="https://www.youtube.com/embed/C2OzgZUd2r0"  class="completa"></iframe>
                            </div>
                            <div class="card-content" style="text-align:center;">
                                <h2>No pienses rendirte </h2>
                                                                
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-image">
                                <iframe src="https://www.youtube.com/embed/bqHVjln2BPU"  class="completa"allowfullscreen></iframe>
                            </div>
                            <div class="card-content" style="text-align:center;">
                                <h2>Cansado </h2>
                                                                
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-image">
                                <iframe  src="https://www.youtube.com/embed/Dz3gNaG8RvE" class="completa" allowfullscreen></iframe>
                            </div>
                            <div class="card-content" style="text-align:center;">
                                <h2>Un intento mas </h2>
                                                                
                            </div>
                        </div>

                    </div>
                 
                  
                                </section>
                                <img  class="imagenLado"src="src/img/exploracion.jpeg">
                                <div id="informacion">
                                    <span class="TituloInformacion"> <br><br><br>¿ Que se necesita para hacer este tipo de ejercicio? </span>

                                      
                                    <p class="TextoInformacion"> Primeramente para realizar ejercicios de nivel intenso se tiene tener comtemplado tener antes una rutina  de ejercicios recomendable tener antes una rutina anteriormente persistente de poco a poco   , tambien se debe considerar que este no se puede realizar con sus factores de riesgo . 
                                     <br>   Obviamente no los puede realizar con  hipertension, colesterol, diabetes y sobrepeso , por el tema de flujo de sangre.<br>
                                    Tener antes una exploracion analitica y fisica con su doctor , en especifico un ecocardiagrama .  </p>
                            
                                </div>


                                 <img  class="imagenLado imagenLadoContrario"src="src/img/intensamente.jpg">
                                 <div id="informacion" class="informacionContrario">
                                    <span class="TituloInformacion"> <br><br> Recomiendaciones  </span>
                                
                                  
                                  <p class="TextoInformacion"> <img class="flecha"src="src/img/flecha.png"> Tener un buen calentamiento para el flujo de la sangre .</p>
                                  <p class="TextoInformacion">  <img class="flecha"src="src/img/flecha.png"> Temperatura de los musculos mas alta .</p>
                                  <p class="TextoInformacion">  <img class="flecha"src="src/img/flecha.png">Mejor rango de movimiento(tensos)  .</p>
                                  <p class="TextoInformacion"> <img class="flecha"src="src/img/flecha.png"> Cambio hormonal para la distribucion de energia .</p>
                                  <p class="TextoInformacion"> <img class="flecha"src="src/img/flecha.png"> Preparacion mental .</p>
                                  <p class="TextoInformacion">  <img class="flecha"src="src/img/flecha.png"> No sobre estirarse  .</p>
                                    
                                  </div>

                                  <img  class="imagenLado"src="src/img/intensamente2.jpg">
                                <div id="informacion">
                                    <span class="TituloInformacion"> <br> Porque no debes parar ? </span>
                                    <p class="TextoInformacion">  <img class="flecha"src="src/img/flecha.png"> La clave para iniciar algo es dejar de hablar y ponerse a realizar .</p>
                                    <p class="TextoInformacion">  <img class="flecha"src="src/img/flecha.png"> No puedes ganar hasta que aprendas a perder .</p>
                                    <p class="TextoInformacion">  <img class="flecha"src="src/img/flecha.png"> Da siempre lo mejor de ti. Lo que siembres hoy dará su fruto mañana .</p>
                                    <p class="TextoInformacion">  <img class="flecha"src="src/img/flecha.png"> Actúa como si lo que hicieras marcase la diferencia. Lo hace. .</p>
                                  <p class="TextoInformacion">  <img class="flecha"src="src/img/flecha.png"> Hagas lo que hagas, hazlo intensamente .</p>
                                    <p class="TextoInformacion">  <img class="flecha"src="src/img/flecha.png"> Para tener éxito, en primer lugar debemos creer que podemos .</p>
                                </div>

                               

                            <!-- CARDS GIRATORIAS  -->
                                <div id="SecionTip">

                                   <!--CARD GIRATORIA -->
                                    <div class = "contenidos" style="margin-top: 7vw;">
                                        <div class = "imagen">
                                        <div class = "parteDelantera">
                                            <p class = "TituloGiratorio">No cuidar lo que me comes </p>
                                        <img class = "derecha2" src="imagenes/malanutricion.jpg" width="100%" height="100%">
                                        </div>
                                        <div class = "parteTrasera">
                                            <p class = "TituloGiratorio">Una dieta saludable </p>
                                            <img class = "derecha2" src="src/img/background6.jpg" width="100%" height="100%">
                                        </div>
                                        </div>
                                        </div><!--CARD GIRATORIA -->


                                 <!--CARD GIRATORIA -->
                                    <div class = "contenidos" style="margin-top: 7vw;">
                                        <div class = "imagen">
                                        <div class = "parteDelantera">
                                            <p class = "TituloGiratorio">Pereza</p>
                                        <img class = "derecha2" src="imagenes/dormir.jpg" width="100%" height="100%">
                                        </div>
                                        <div class = "parteTrasera">
                                            <p class = "TituloGiratorio">Disciplina</p>
                                            <img class = "derecha2" src="imagenes/disciplina.jpg" width="100%" height="100%">
                                        </div>
                                        </div>
                                        </div><!--CARD GIRATORIA -->



                                         <!--CARD GIRATORIA -->
                                    <div class = "contenidos" style="margin-top: 7vw;">
                                        <div class = "imagen">
                                        <div class = "parteDelantera">
                                            <p class = "TituloGiratorio">Calentamiento mal </p>
                                        <img class = "derecha2" src="imagenes/calentamientomal.jpg" width="100%" height="100%">
                                        </div>
                                        <div class = "parteTrasera">
                                            <p class = "TituloGiratorio">Calentamiento completo</p>
                                            <img class = "derecha2" src="imagenes/calentamiento.jpg" width="100%" height="100%">
                                        </div>
                                        </div>
                                        </div><!--CARD GIRATORIA -->


                                         <!--CARD GIRATORIA -->
                                    <div class = "contenidos" style="margin-top: 7vw;">
                                        <div class = "imagen">
                                        <div class = "parteDelantera">
                                            <p class = "TituloGiratorio">No tener horario </p>
                                        <img class = "derecha2" src="imagenes/horasmalas.jpg" width="100%" height="100%">
                                        </div>
                                        <div class = "parteTrasera">
                                            <p class = "TituloGiratorio">Tener un horario estricto</p>
                                            <img class = "derecha2" src="imagenes/productivo.png" width="100%" height="100%">
                                        </div>
                                        </div>
                                        </div><!--CARD GIRATORIA -->


                                        </div><!--FIN DE CARDS GIRATORIAS -->
                                  </div> <!--FIN DE INTENSA DE MOTIVACION -->
    


                              

<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                                
                 

              <!--ESPIRITUAL DE MOTIVACION-->
             <div id="espiritualMotivacion" style="display: none; text-align: center;">
                <section class="background background-image-3">
                    <div class="background-filter"></div>
                    <div class="image-3">
                        <h1 >Espiritual </h1>
                        <h2>No se quien eres , sino quien puedes ser </h2>
                    </div>
                </section>
                <section class="divider hide-on-small-and-down">
                </section> 
                <section class="information">

                 
                    <div class="cards">
                        
               <div class="card">
            <div class="card-image">
                <iframe  src="https://www.youtube.com/embed/EPsJRAdpM0c" class="completa"  allowfullscreen></iframe>
            </div>
            <div class="card-content" style="text-align:center;">
                <h2>Aprecia cada momento </h2>
                                                
            </div>
        </div>

        <div class="card">
            <div class="card-image">
                <iframe  src="https://www.youtube.com/embed/R2FrsbgPq8w"  class="completa"  allowfullscreen></iframe>
            </div>
            <div class="card-content" style="text-align:center;">
                <h2>Liberate de tus ataduras  </h2>
                                                
            </div>
        </div>

        <div class="card">
            <div class="card-image">
                <iframe  src="https://www.youtube.com/embed/r0NQIMIlkIA" class="completa"  allowfullscreen></iframe>
            </div>
            <div class="card-content" style="text-align:center;">
                <h2>Dale valor a tu vida </h2>
                                                
            </div>
        </div>

    </div>
 
  
                </section>
                <img  class="imagenLado"src="imagenes/meditacion.jpg">
                <div id="informacion">
                    <span class="TituloInformacion"> <br>¿ Porque deberias meditar ? </span>

                      <div id="ContenidoTexto ContenidoTextoCompleto">
                    <p class="TextoInformacion"> Todos tenemos una mente , pero hay muy pocas personas que son dueñas de esta .Las personas viven cada dia con preocupacion  , problenas , con extres etc.<br>
                    La meditacion es un actividad que puede darte demasiados beneficios , son  como no vivir en automatico apreciar cada momento y experiencia, que te enfocar en el camino de deeses.Actuar en base a tus principios y no a los que otros te digan que hagas . <br> 
                Sino fuera poco un benedifico de la meditacion es pensar menos y hacer mas ;<br> deja de vivir de extres y pensar en que lo podra hacer y mejor ponerte en accion .<br>
            Los pensamientos son estruturados y no solo ser un reflejo , tu vida no debe ser reflejo , sino unos de los principios de la meditacion es entrenar tu mente y la salud mental porque al igual que tu cuerpo necesita mantenimiento  y cuidado .  </p>
                 </div>
                </div>


                 <img  class="imagenLado imagenLadoContrario"src="imagenes/desintoxicar.png">
                 <div id="informacion" class="informacionContrario">
                    <span class="TituloInformacion"> <br>Desintoxicar tu mente   </span>
                    <div id="ContenidoTexto ContenidoTextoCompleto">
                  
                  <p class="TextoInformacion"> <img class="flecha"src="src/img/flecha.png"> Cuida mucho que influencias deja entrar en el jardin de tu mente ,no dejes entrar cosas inutiles , cuida lo que ves y como aprovechas tu vida .</p>
                  <p class="TextoInformacion">  <img class="flecha"src="src/img/flecha.png"> Varias veces al dia estar en el momento presente vive el momento y la situacion , para ello pon tu atencion a tus sentidos lo que ves , oyes etc.
                    recomdables 
                    lavar platos ,
                     correr y 
                    ducharte .</p>
                  <p class="TextoInformacion">  <img class="flecha"src="src/img/flecha.png">  haz que tu sangre fluya diariamente , entrena poco cada dia ,
                    actividades que logren liberar extres y pensar tu mente en otra cosa por otro momento del trabajo
                    que brinden claridad.
                    un momento diario para permitirte  pensar en ese momento y analizarlo.</p>
                 
                    </div>
                  </div>

                  <img  class="imagenLado"src="imagenes/mindfulness.jpg">
                <div id="informacion">
                    <span class="TituloInformacion"> <br> Porque necesitas mindfulness </span>
                    <div id="ContenidoTexto ContenidoTextoCompleto">
                   
                    <p class="TextoInformacion">  <img class="flecha"src="src/img/flecha.png"> Fragmentacion   no pienses en hacer una gran tarea , sino en pequeñas muchas tareas , pensando en el momento que haces esa misma tarea  .</p>
                    <p class="TextoInformacion">  <img class="flecha"src="src/img/flecha.png"> Confianza ten fe que lo vas hacer y no pienses en el fracaso , nada funcionar sino crees que lo vas a hacer  .</p>
                    <p class="TextoInformacion">  <img class="flecha"src="src/img/flecha.png"> Perspectiva de voluntad
                        la manera en que percibimos la voluntad puede afectar en gran medida sus niveles ,
                        no establecas un limite , y estudia como funciona  .</p>
                    <p class="TextoInformacion">  <img class="flecha"src="src/img/flecha.png"> Identidad
                        cuando tu identidad esta alineada con tus metas y habitos que intentas construir, la cantidad de voluntad que neceistas para mantenerlos disminuye
                        quieres divertirte o quieres generar un cambio .</p>
                  
                    </div>
                </div>

               

            <!-- CARDS GIRATORIAS  -->
                <div id="SecionTip">

                   <!--CARD GIRATORIA -->
                    <div class = "contenidos" style="margin-top: 7vw;">
                        <div class = "imagen">
                        <div class = "parteDelantera">
                            <p class = "TituloGiratorio">Mantenerte en tu zona de confort </p>
                        <img class = "derecha2" src="imagenes/zona.jpg" width="100%" height="100%">
                        </div>
                        <div class = "parteTrasera">
                            <p class = "TituloGiratorio">Salte de la zona de confort </p>
                            <img class = "derecha2" src="imagenes/salzona.jpg" width="100%" height="100%">
                        </div>
                        </div>
                        </div><!--CARD GIRATORIA -->


                 <!--CARD GIRATORIA -->
                    <div class = "contenidos" style="margin-top: 7vw;">
                        <div class = "imagen">
                        <div class = "parteDelantera">
                            <p class = "TituloGiratorio">Compararte con los otros </p>
                        <img class = "derecha2" src="imagenes/comparaciones.jpg" width="100%" height="100%">
                        </div>
                        <div class = "parteTrasera">
                            <p class = "TituloGiratorio">Busca tu propio camino </p>
                            <img class = "derecha2" src="imagenes/trazapropiocamino.jpg" width="100%" height="100%">
                        </div>
                        </div>
                        </div><!--CARD GIRATORIA -->



                         <!--CARD GIRATORIA -->
                    <div class = "contenidos" style="margin-top: 7vw;">
                        <div class = "imagen">
                        <div class = "parteDelantera">
                            <p class = "TituloGiratorio">No cuidarte , solo por no estar solo </p>
                        <img class = "derecha2" src="imagenes/relacionestoxicas.jpg" width="100%" height="100%">
                        </div>
                        <div class = "parteTrasera">
                            <p class = "TituloGiratorio">No te conformes con menos , solo porque este disponible </p>
                            <img class = "derecha2" src="imagenes/amistades.jpg" width="100%" height="100%">
                        </div>
                        </div>
                        </div><!--CARD GIRATORIA -->


                         <!--CARD GIRATORIA -->
                    <div class = "contenidos" style="margin-top: 7vw;">
                        <div class = "imagen">
                        <div class = "parteDelantera">
                            <p class = "TituloGiratorio">Sobrepensar en las cosas </p>
                        <img class = "derecha2" src="imagenes/depresion.jpg" width="100%" height="100%">
                        </div>
                        <div class = "parteTrasera">
                            <p class = "TituloGiratorio"> Empieza en vez de pensar</p>
                            <img class = "derecha2" src="imagenes/productividad.jpg" width="100%" height="100%">
                        </div>
                        </div>
                        </div><!--CARD GIRATORIA -->


                        </div><!--FIN DE CARDS GIRATORIAS -->

         </div> <!--FIN DE ESPIRITUAL DE MOTIVACION-->





<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->







 <!--RELAJADO  DE MOTIVACION-->
 <div id="relajadoMotivacion" style="display: none; text-align: center;">
    <section class="background background-image-3">
        <div class="background-filter"></div>
        <div class="image-3">
            <h1 >Relajado </h1>
            <h2>Tan solo juega, diviértete, disfruta del juego </h2>
        </div>
    </section>
    <section class="divider hide-on-small-and-down">
    </section> 
    <section class="information">

     
        <div class="cards">
            
   <div class="card">
<div class="card-image">
    <iframe src="https://www.youtube.com/embed/DgMecoNIiz8"  class="completa"  allowfullscreen></iframe>
</div>
<div class="card-content" style="text-align:center;">
    <h2>Detente a reflexionar </h2>
                                    
</div>
</div>

<div class="card">
<div class="card-image">
    <iframe  src="https://www.youtube.com/embed/6MpY9Jrb-go" class="completa"  allowfullscreen></iframe>
</div>
<div class="card-content" style="text-align:center;">
    <h2>Todo llega a su momento  </h2>
                                    
</div>
</div>

<div class="card">
<div class="card-image">
    <iframe  src="https://www.youtube.com/embed/j8cGuadak3A" class="completa"  allowfullscreen></iframe>
</div>
<div class="card-content" style="text-align:center;">
    <h2>Deja de preucparte</h2>
                                    
</div>
</div>

</div>


    </section>
    <img  class="imagenLado"src="imagenes/extres.png">
    <div id="informacion">
        <span class="TituloInformacion"> <br>¿ Poque es importante liberar estres  ? </span>

          <div id="ContenidoTexto ContenidoTextoCompleto">
        <p class="TextoInformacion"> El extres es algo normal en nuestra vida diaria pero no es el enemigo , es importante para nuestro crecimiento como personas , sirve para mantenerte enfocada en el objetivo 
            pero cuando el extres es excesivo y no sabes manejarla y afecta a tu salud. existen varios tipos de extres como extres mental se denomina  cuando tenemos la mente adolorida y llena de frustaciones ,  extres fisico se denomina  cuando una parte en especifico
            de nuestro cuerpo genera tension  ,extres emocional se denomina cuando nuestros emociones no nos dejan  pensar con clairidad y extres espiritual se denomina cuando dejas de confiar en ti mismo y lo que puedas generar. 
         </p>
     </div>
    </div>


     <img  class="imagenLado imagenLadoContrario"src="imagenes/estiramiento.jpg">
     <div id="informacion" class="informacionContrario">
        <span class="TituloInformacion"> <br> ¿Como liberar estres ?   </span>
        <div id="ContenidoTexto ContenidoTextoCompleto"> 
      
      <p class="TextoInformacion"> <img class="flecha"src="src/img/flecha.png">Identifica que emocion te carga y con que emocion  quieres eliminar y porque te pesa  </p>
      <p class="TextoInformacion textolista">  <img class="flecha"src="src/img/flecha.png">Enraizate tocar los puntas de la pies con la manos  </p>
      <p class="TextoInformacion textolista" >  <img class="flecha"src="src/img/flecha.png">Vibrar y disuelve tensiones y mantener una respiracion, profunda  haz movimientos aleatorios que normalamente que nunca haces ,estira o moviliza articulaciones o musculos tensos </p>
      <p class="TextoInformacion" text-aling="left">  <img class="flecha"src="src/img/flecha.png"> Respiraciones wim hof  inlaciones profundas , expulsar aire y mantenerse sin aire durante un lapzo de aire largo</p>
      <p class="TextoInformacion textolista">  <img class="flecha"src="src/img/flecha.png">Reflexiona ,estar presente en el momento que estas y cuando te levantes liberate de los problemas de la vida que tengas  </p>

        </div>
      </div>

      <img  class="imagenLado"src="imagenes/vivirtranquilo.jpg">
    <div id="informacion">
        <span class="TituloInformacion"> <br>  Como tener una vida tranquila </span>
        <div id="ContenidoTexto ContenidoTextoCompleto">
       
        <p class="TextoInformacion">  <img class="flecha"src="src/img/flecha.png">Compremete con tu estilo de vida ,que seas coherente  de como que pienses como quieres que se tu vida y de la vida que estas viviendo y actuar conforme con lo que quieres , llevar la mentalidad que necesitas para apegarse al estilo vida </p>
        <p class="TextoInformacion">  <img class="flecha"src="src/img/flecha.png">Empieza a dedicar tiempo a lo que verdad que te gusta ,pon en lista tus mejores cualidades y ponlas a prueba </p>
        <p class="TextoInformacion">  <img class="flecha"src="src/img/flecha.png">Empieza por tu salud , luego riqueza y luego amor,forma un cuerpo con el que sientas comodo y un cuerpo fuerte, estu cas a, tu hogar.Cuida tu aspecto personal y relajar tu mente , concetar con todo aquello que es pasajero como las preucupaciones y ideas  </p>
        <p class="TextoInformacion">  <img class="flecha"src="src/img/flecha.png">Desafias tu estilo de vida , la felicidad no es final sino el punto de partida.Estar presente en el momento que estas y cuando te levantes liberate de los problemas de la vida que tengas  </p>
      
        
        </div>
    </div>

   

<!-- CARDS GIRATORIAS  -->
    <div id="SecionTip">

       <!--CARD GIRATORIA -->
        <div class = "contenidos" style="margin-top: 7vw;">
            <div class = "imagen">
            <div class = "parteDelantera">
                <p class = "TituloGiratorio">Quejarte y lamentarte todo el dia  </p>
            <img class = "derecha2" src="imagenes/quejas.jpg" width="100%" height="100%">
            </div>
            <div class = "parteTrasera">
                <p class = "TituloGiratorio">Aceptar esos errores  </p>
                <img class = "derecha2" src="imagenes/aceptarerrores.jpg" width="100%" height="100%">
            </div>
            </div>
            </div><!--CARD GIRATORIA -->


     <!--CARD GIRATORIA -->
        <div class = "contenidos" style="margin-top: 7vw;">
            <div class = "imagen">
            <div class = "parteDelantera">
                <p class = "TituloGiratorio">Rodearte con gente negativa  </p>
            <img class = "derecha2" src="imagenes/personaNegativa.jpg" width="100%" height="100%">
            </div>
            <div class = "parteTrasera">
                <p class = "TituloGiratorio">Rodearte con gente positiva  </p>
                <img class = "derecha2" src="imagenes/personaPositiva.jpg" width="100%" height="100%">
            </div>
            </div>
            </div><!--CARD GIRATORIA -->



             <!--CARD GIRATORIA -->
        <div class = "contenidos" style="margin-top: 7vw;">
            <div class = "imagen">
            <div class = "parteDelantera">
                <p class = "TituloGiratorio">Pensar en el pasado y lo que ha pasado </p>
            <img class = "derecha2" src="imagenes/noDisfrutardia.jpg" width="100%" height="100%">
            </div>
            <div class = "parteTrasera">
                <p class = "TituloGiratorio"> Disfruta la vida </p>
                <img class = "derecha2" src="imagenes/Disfrutarvida.jpg" width="100%" height="100%">
            </div>
            </div>
            </div><!--CARD GIRATORIA -->


             <!--CARD GIRATORIA -->
        <div class = "contenidos" style="margin-top: 7vw;">
            <div class = "imagen">
            <div class = "parteDelantera">
                <p class = "TituloGiratorio">Tener dolor en articulaciones  </p>
            <img class = "derecha2" src="imagenes/dolorArticulaciones.jpg" width="100%" height="100%">
            </div>
            <div class = "parteTrasera">
                <p class = "TituloGiratorio"> Hacer ejercicios ligeros</p>
                <img class = "derecha2" src="imagenes/ejerciciosLigeros.jpeg" width="100%" height="100%">
            </div>
            </div>
            </div><!--CARD GIRATORIA -->


            </div><!--FIN DE CARDS GIRATORIAS -->

</div> <!--FIN DE RELAJADO DE MOTIVACION-->


<!------------------------------------------------------------------------------------NOVATO ------------------------------------------------------------------------------------------------------------------------------------------------->







 <!--NOVATO   DE MOTIVACION-->
 <div id="novatoMotivacion" style="display: none; text-align: center;">
    <section class="background background-image-3">
        <div class="background-filter"></div>
        <div class="image-3">
            <h1 >Novato </h1>
            <h2>El comienzo es el momento más importante del trabajo </h2>
        </div>
    </section>
    <section class="divider hide-on-small-and-down">
    </section> 
    <section class="information">

     
        <div class="cards">
            
   <div class="card">
<div class="card-image">
    <iframe  src="https://www.youtube.com/embed/n-uWtKO6JDo"  class="completa"  allowfullscreen></iframe>
</div>
<div class="card-content" style="text-align:center;">
    <h2>Ten persistencia  </h2>
                                    
</div>
</div>

<div class="card">
<div class="card-image">
    <iframe  src="https://www.youtube.com/embed/Y562pEnkAM4"  class="completa"   allowfullscreen></iframe>
</div>
<div class="card-content" style="text-align:center;">
    <h2>Deja de poner excusas   </h2>
                                    
</div>
</div>

<div class="card">
<div class="card-image">
    <iframe  src="https://www.youtube.com/embed/F5pbHSO9_1g" class="completa"  allowfullscreen></iframe>
</div>
<div class="card-content" style="text-align:center;">
    <h2>Desafiando gigantes</h2>
                                    
</div>
</div>

</div>


    </section>
    <img  class="imagenLado"src="imagenes/beneficios.jpg">
    <div id="informacion">
        <span class="TituloInformacion"> <br>¿ Porque deberias hacer ejercicio ? </span>

          <div id="ContenidoTexto ContenidoTextoCompleto">
        <p class="TextoInformacion"> Si no te has decicido a hacer ejercicio , estos son unos de los beneficios que son prevencion de enfermadades cronicas  como el diabetes , hipertension  y cargas a nivel muscular.
            Tener una vida con mas energia y mas saludable , antes de iniciar con cuqluier entrenamiento consultarlo con tu doctor de cabecera, empezar  con un ejercicio facil de lograr un ejericio que te guste y que sea facil de realizar y que tu seas capaz de hacer.
            Luego definir claramente tanto el ejercicio que quieres iniciar como meta realista ,semana a semana avanza lentamente con la progresion del tiempo y la intensidad del ejercicio.
            Elige una actividad de tu rutina como recoradatorio.Encuentra una recompesa saludable e inmediata ducha , agua fria , estiramiento especial. Y finalmente anota tus metas y registra tus avances    </p>
     </div>
    </div>


     <img  class="imagenLado imagenLadoContrario"src="imagenes/locus.jpg">
     <div id="informacion" class="informacionContrario">
        <span class="TituloInformacion"> <br>¿ Que es el locus de control?  </span>
        <div id="ContenidoTexto ContenidoTextoCompleto">
            <p class="TextoInformacion">Hasta que punto crees que tienes control sobre tu vida  </p>
      <p class="TextoInformacion"> <img class="flecha"src="src/img/flecha.png"> Locus de control externo 
        creer que tu exito que es gracias a factores que estan fuera de control,
        poner  excusas de lo que te pase es por otros .
        Pensar el que universo conspira en tu contra y eres el ser mas deschichado de la vida ,
        que solo tus metas se sostiene de tu talento natural y que no tomaras tiempo en cosas que no seas bueno . </p>
      <p class="TextoInformacion">  <img class="flecha"src="src/img/flecha.png"> Locus de control interno 

        tienes que sentir que tienes el control de tu vida todo el tiempo y eres responsable de lo que sucede todo el tiempo,
        piensa que tus logros es gracias a tu esfuerzo que das. 
        Cuando le dedicas a algo es algo que tu controlas por completo
        tus aciones son las que resuelven el problema, 
        tu eres el tiene control de tu destino.
         Cuando logres algo , di que fue gracias a los cambios que hiciste .
        </p>

     
        </div>
      </div>

      <img  class="imagenLado"src="imagenes/determinacion.jpg">
    <div id="informacion">
        <span class="TituloInformacion"> <br> Determinado a tu objetivo </span>
        <div id="ContenidoTexto ContenidoTextoCompleto">
            <p class="TextoInformacion">Usa estas frases en tu dia  </p>
        <p class="TextoInformacion" >  <img class="flecha"src="src/img/flecha.png"> Dejare de ...dejar malos habitos y limpios habitos , minimizar los arrepentimientos y he irlos dejando ir , dejando el pasado en el pasado y seguir, admite tus errores y sigue  ayuda a evitar  volver  a un pensamiento preucupante en el dia.   .</p>
        <p class="TextoInformacion">  <img class="flecha"src="src/img/flecha.png"> Esto agradecido por ...agradece lo que has logrado y lo que te sientes feliz, de lo que tienes , ayudara a ser positivo cada dia .</p>
        <p class="TextoInformacion">  <img class="flecha"src="src/img/flecha.png">Me enfocare en.... deja de pensar en pensar en una enorme lista de cosas , 
            fatiga de desicion 
            deja de pensar  todo a la vez , en objetivos pequeños y solo una.No importa que tan racional y fuerte seas no puedes hacer desicion tras otra sin pagar el precio biologico   )
            mantiene tu atencion en una gran meta 
            </p>
           
        
        </div>
    </div>

   

<!-- CARDS GIRATORIAS  -->
    <div id="SecionTip">

       <!--CARD GIRATORIA -->
        <div class = "contenidos" style="margin-top: 7vw;">
            <div class = "imagen">
            <div class = "parteDelantera">
                <p class = "TituloGiratorio">Procastinar </p>
            <img class = "derecha2" src="imagenes/procastinar.png" width="100%" height="100%">
            </div>
            <div class = "parteTrasera">
                <p class = "TituloGiratorio">Enfocate en tu objetivo </p>
                <img class = "derecha2" src="imagenes/enfocarse.jpg" width="100%" height="100%">
            </div>
            </div>
            </div><!--CARD GIRATORIA -->


     <!--CARD GIRATORIA -->
        <div class = "contenidos" style="margin-top: 7vw;">
            <div class = "imagen">
            <div class = "parteDelantera">
                <p class = "TituloGiratorio">Malos habitos </p>
            <img class = "derecha2" src="imagenes/malos habitos.jpg" width="100%" height="100%">
            </div>
            <div class = "parteTrasera">
                <p class = "TituloGiratorio">Buenos habitos </p>
                <img class = "derecha2" src="imagenes/buenoshabitos.jpg" width="100%" height="100%">
            </div>
            </div>
            </div><!--CARD GIRATORIA -->



             <!--CARD GIRATORIA -->
        <div class = "contenidos" style="margin-top: 7vw;">
            <div class = "imagen">
            <div class = "parteDelantera">
                <p class = "TituloGiratorio">Ser pesimismo </p>
            <img class = "derecha2" src="imagenes/pesimismo.jpg" width="100%" height="100%">
            </div>
            <div class = "parteTrasera">
                <p class = "TituloGiratorio">Tener confianza </p>
                <img class = "derecha2" src="imagenes/confianza.jpg" width="100%" height="100%">
            </div>
            </div>
            </div><!--CARD GIRATORIA -->


             <!--CARD GIRATORIA -->
        <div class = "contenidos" style="margin-top: 7vw;">
            <div class = "imagen">
            <div class = "parteDelantera">
                <p class = "TituloGiratorio">Rendirse  </p>
            <img class = "derecha2" src="imagenes/doblegarse.jpg" width="100%" height="100%">
            </div>
            <div class = "parteTrasera">
                <p class = "TituloGiratorio"> Ten persistencia</p>
                <img class = "derecha2" src="imagenes/persistencia.jpg" width="100%" height="100%">
            </div>
            </div>
            </div><!--CARD GIRATORIA -->


            </div><!--FIN DE CARDS GIRATORIAS -->

</div> <!--FIN DE NOVATO DE MOTIVACION-->






<!------------------------------------------------------------------------------------EXPERIENCIA ------------------------------------------------------------------------------------------------------------------------------------------------->







 <!--EXPERIENCIA  DE MOTIVACION-->
 <div id="experienciaMotivacion" style="display: none; text-align: center;">
    <section class="background background-image-3">
        <div class="background-filter"></div>
        <div class="image-3">
            <h1 >Experiencia </h1>
            <h2>Si entrenas lo suficiente, no solo te vas a endurecer, sino que además serás duro de derrotar </h2>
        </div>
    </section>
    <section class="divider hide-on-small-and-down">
    </section> 
    <section class="information">

     
        <div class="cards">
            
   <div class="card">
<div class="card-image">
    <iframe src="https://www.youtube.com/embed/DgMecoNIiz8"  class="completa"  allowfullscreen></iframe>
</div>
<div class="card-content" style="text-align:center;">
    <h2>Detente a reflexionar </h2>
                                    
</div>
</div>

<div class="card cardMediana">
<div class="card-image">
    <iframe  src="https://www.youtube.com/embed/6MpY9Jrb-go" class="completa"  allowfullscreen></iframe>
</div>
<div class="card-content" style="text-align:center;">
    <h2>Todo llega a su momento  </h2>
                                    
</div>
</div>

<div class="card">
<div class="card-image">
    <iframe  src="https://www.youtube.com/embed/j8cGuadak3A" class="completa"  allowfullscreen></iframe>
</div>
<div class="card-content" style="text-align:center;">
    <h2>Deja de preucparte</h2>
                                    
</div>
</div>

</div>


    </section>
    <img  class="imagenLado"src="imagenes/estancado.jpg">
    <div id="informacion">
        <span class="TituloInformacion"> <br><br>¿ Piensas estarte estancado? </span>

          <div id="ContenidoTextoIntermedio">
        <p class="TextoInformacion"> 
            Dite la verdad a ti mismo sobre las consecuencias reales de procastinar.
            
            
            te puedess motivar con algo que te placer o por algo que te cause dolor ambos son validos y hay que aprovechar ambos , que a partir de ahora 
            cada vez que quieras proscatinar o fijarte en algo que no es tu objetivo reformula  consecuencias especificas a medio y largo plazo , dejar de posponer cosas por no te apetece 
            dite la verdad que cada que  vez que no me apetece hacer la actividad que necesito la sigue posponiendo cuales son las consecuencias. </p>
     </div>
    </div>


     <img  class="imagenLado imagenLadoContrario"src="imagenes/activo.jpg">
     <div id="informacion" class="informacionContrario">
        <span class="TituloInformacion"> <br>Manten tu cuerpo activo   </span>
        <div id="ContenidoTexto ContenidoTextoCompleto">
      
      <p class="TextoInformacion">Crea un sistemas mini recompesas fijate pequeñps hitos y celebralos . si no hay reconocimiento exterior , date tu mismo

        al final nuestro cerebro instintivo es que el termina gran parte de nuestras aciones diarias , nuestro cuerpo 
        quiere sentirse bien y no sentirse mal si cada vez tomas accion hacia el lugar que tu quieres te das
        pequeña recompesa entoces estas fortaleciendo estas un circuito de mini recompesas. Un bucle en el que tu cuerpo
        cuando tomas accion hacia ese lugar te sientes bien y tienes emociones positivas.
        Un ejemplo , cuando usas tus capacidades , tu talento en tu trabajo te dan reconocimiento y tu sueldo y eso te motiva como mini recompesas 
        basicamente agarra tu objetivo y crea pequeños hitos y cuando lo cumplas recompesate de una forma.  </p>
     
        </div>
      </div>

      <img  class="imagenLado"src="imagenes/limites.jpg">
    <div id="informacion">
        <span class="TituloInformacion"> <br> Rompe tus limites  </span>
        <div id="ContenidoTexto ContenidoTextoCompleto">
       
        <p class="TextoInformacion">  Mantente agil y pivota . si llevas tiempo tomando accion sin resultados . cambiar la estrategia ya , evita quedarte estancando y estatico  deja que la energia fluya dinamicamente movimiento. <br>

            Tienes que cambiar de estrategia , si la forma que estas utilizando no funciona cambia de estrategia , tienes que moverte 
            no tienes que estancarte , mantenerte activo. <br>
        
Rompe tus limites , al hacer esto te sentiras una persona diferente porque al hacer llevaras tu cuerpo a un nivel que no has experimentando
tambien los resultados no se generan con solo ejercicios mentales tienes que ponerlos en practica.<br>

El ejercicio tiene como un gran beneficio tener una mente intutiva , un ejemplo de esto es cuando nuestra mente esta bloqueada y estancanda.
El ejercicio hace que los problemas cambia la bioquimica del cuerpo , esto hace que tengamos una perspectiva diferente , cambie la rigidez , salir de la cabeza, entrar al cuerpo y estar en conctacto con el.  </p>
        
        </div>
    </div>

   

<!-- CARDS GIRATORIAS  -->
    <div id="SecionTip">

       <!--CARD GIRATORIA -->
        <div class = "contenidos" style="margin-top: 7vw;">
            <div class = "imagen">
            <div class = "parteDelantera">
                <p class = "TituloGiratorio">Hacerlo sin esfuerzo </p>
            <img class = "derecha2" src="imagenes/entrenarPereza.jpg" width="100%" height="100%">
            </div>
            <div class = "parteTrasera">
                <p class = "TituloGiratorio">Tener pasion </p>
                <img class = "derecha2" src="imagenes/pasion.jpg" width="100%" height="100%">
            </div>
            </div>
            </div><!--CARD GIRATORIA -->


     <!--CARD GIRATORIA -->
        <div class = "contenidos" style="margin-top: 7vw;">
            <div class = "imagen">
            <div class = "parteDelantera">
                <p class = "TituloGiratorio">No controlar emociones  </p>
            <img class = "derecha2" src="imagenes/noControlaremociones.jpg" width="100%" height="100%">
            </div>
            <div class = "parteTrasera">
                <p class = "TituloGiratorio">Hacer que tu controles las emociones </p>
                <img class = "derecha2" src="imagenes/serenidad.jpg" width="100%" height="100%">
            </div>
            </div>
            </div><!--CARD GIRATORIA -->



             <!--CARD GIRATORIA -->
        <div class = "contenidos" style="margin-top: 7vw;">
            <div class = "imagen">
            <div class = "parteDelantera">
                <p class = "TituloGiratorio">No tomarlo enserio </p>
            <img class = "derecha2" src="imagenes/notomarloenserio.jpg" width="100%" height="100%">
            </div>
            <div class = "parteTrasera">
                <p class = "TituloGiratorio">Planificar tu entrenamiento </p>
                <img class = "derecha2" src="imagenes/planificacion.jpg" width="100%" height="100%">
            </div>
            </div>
            </div><!--CARD GIRATORIA -->


             <!--CARD GIRATORIA -->
        <div class = "contenidos" style="margin-top: 7vw;">
            <div class = "imagen">
            <div class = "parteDelantera">
                <p class = "TituloGiratorio">Hacer los mismos ejercicios </p>
            <img class = "derecha2" src="imagenes/ejercicioszonaconfort.jpg" width="100%" height="100%">
            </div>
            <div class = "parteTrasera">
                <p class = "TituloGiratorio"> Llevarte al limite </p>
                <img class = "derecha2" src="imagenes/llevatelimite.jpg" width="100%" height="100%">
            </div>
            </div>
            </div><!--CARD GIRATORIA -->


            </div><!--FIN DE CARDS GIRATORIAS -->

</div> <!--FIN DE EXPERIENCIA DE MOTIVACION-->














             
    
                </section>
              
    
               <script type="text/javascript">
            document.getElementById("espiritual").onclick=function()
            {
                document.getElementById("desaparecer").style.display="none";
                document.getElementById("espiritualMotivacion").style.display="block";
                    document.getElementById("jeje").innerHTML="";
                    
                   
    
                  
                }

                document.getElementById("intensidad").onclick=function()
            {
                document.getElementById("desaparecer").style.display="none";
                document.getElementById("intensaMotivacion").style.display="block";
                    document.getElementById("jeje").innerHTML="";
                    
                    
                   
    
                  
                }


                document.getElementById("relajado").onclick=function()
            {
                document.getElementById("desaparecer").style.display="none";
                document.getElementById("relajadoMotivacion").style.display="block";
                    document.getElementById("jeje").innerHTML="";
                    
                    
                   
    
                  
                }

                document.getElementById("novato").onclick=function()
            {
                document.getElementById("desaparecer").style.display="none";
                document.getElementById("novatoMotivacion").style.display="block";
                    document.getElementById("jeje").innerHTML="";
                    
                    
                   
    
                  
                }



                document.getElementById("experiencia").onclick=function()
            {
                document.getElementById("desaparecer").style.display="none";
                document.getElementById("experienciaMotivacion").style.display="block";
                    document.getElementById("jeje").innerHTML="";
                    
                    
                   
    
                  
                }
         
         
            
            
            </script>
               
            </main>
            <script src = "motivacion.js"></script>
                       
        </body>
        
        </html>