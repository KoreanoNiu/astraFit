<?php 
    session_start();

    if(isset($_SESSION['idUsuario']) && $_SESSION['idUsuario'] != ''){
        include_once('php/database.php');
        $conexion = Conexion::Conectar();
        $funcionesDB = new funcionesDB;
    
    
        $data = $funcionesDB->obtenerDatoEspecifico($conexion, 'nivel', 'clientes', $_SESSION['idUsuario']);

        $nivelEntrenamiento = $data[0]['nivel'];

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
 
        <?php include 'php/handlebars/header.php'; ?>
      
    

    <main>
        <section id="desapareceC" style="display: block;" class="background background-image-3">
           <div class="background-filter"></div>
            <div class="image-3" >
                <h1>EJERCICIOS Y ENTRENAMIENTO</h1>
                <H2>¡RUTINA DIARIA DEPENDIENDO A TU NIVEL!</H2>
                
            </div>
        </section>
        <section class="divider hide-on-small-and-down">
        </section>
        <section class="information" >
        <div id="card1" style="display:block;">
        <div class="cards" style="position:relative; left: 30%; text-align:center;">
                    <div class="card">
            <h4>TU NIVEL ACTUAL ES: </h4>
            </div></div></div><br>
<<<<<<< HEAD
        </div>
            <div id="TopSelect">
            <div id="elselect" class="TopSelect"style="display: block; text-align: center; position:relative; left: 7%;">
            <div class="select" style="font-family: Roboto-italic;">
=======
            <div id="elselect" style="display: block; text-align: center; position:relative; left: 7%;">
            <div class="select">
>>>>>>> parent of f580e18... Merge branch 'main' of https://github.com/KoreanoNiu/astraFit into main
            
                <select id="nivel">
                    <option style="color:black; font-size: 20px; font-weight: bold; font-family: Oxygen;" value="<?php echo $nivelEntrenamiento ?>"><?php echo $nivelEntrenamiento ?></option><br>
                </select><br><br>
              

                    
                
            </div>
           </div>
           <div id="card2" style="display:block;">
           <div class="cards" style="position:relative; left: 30%; text-align:center;">
                    <div class="card">
            <h4>SELECCIONA TU MODALIDAD: </h4>
            </div></div></div><br>
           <div id="elselect2" style="display: block; text-align: center; position:relative; left: 7%;">
            <div class="select" style="font-family: Roboto-italic;">
                <select id="modalidad">
                    <option selected disabled>SELECCIONA</option>
                    <option style="color:black; font-size: 20px; font-weight: bold; font-family: Oxygen;">GYM</option><br>

                    <option style="color:black; font-size: 20px; font-weight: bold; font-family: Oxygen;">CASA</option>

                       
                </select><br><br>
              
                    
                
            </div>
            
            </div>
            <div style="text-align: center;" id="botonx" style="display: block;">
                <br><input type="submit" class="botonon" id="nivel1" value="OBTENER ENTRENAMIENTO"></input>
            </div>
        </div>
            <div id="desaparecer" style="display: none; overflow: hidden; left: -15rem; position: relative;">

                <div class="cards" style="position:relative; left: 30%;">
                    <div class="card">
                        <div class="card-image">
                            <img id="imagenp" src="src/img/FULLBODY.jpg" alt="">
                        </div>
                        <div class="card-content" style="text-align:center;">
                            <div id="mostrar">
                            <h2>Rutina para: </h2>
                            <button class="botonon2" id="lunes">LUNES</button>
                            <button class="botonon2" id="martes">MARTES</button>
                            <button class="botonon2" id="miercoles">MIÉRCOLES</button>
                            <button class="botonon2" id="jueves">JUEVES</button>
                            <button class="botonon2" id="viernes">VIERNES</button>
                            <button class="botonon2" id="sabado">SÁBADO</button>
                        </div>
                        <div id="mostrar2" style="display: none;" style="text-align: center; padding: 20px;">
                            <div id="0" style="display: none;">
                            <img src="" id="imagen" height="200px">
                            <h3 id="A"></h3>
                            <h3 id="B"></h3>
                            <button class="botonon4" id="SIG1">SIGUIENTE</button>
                            </div>
                            <div id="1" style="display: none;">
                            <img src="" id="imagen1" height="200px">
                            <h3 id="D"></h3>
                            <h3 id="E"></h3>
                            <button class="botonon4" id="SIG2">SIGUIENTE</button>
</div>
<div id="2" style="display: none;">
                            <img src="" id="imagen2" height="200px">
                            <h3 id="F"></h3>
                            <h3 id="G"></h3>
                            <button class="botonon4" id="SIG3">SIGUIENTE</button>
</div>
<div id="3" style="display: none;">
                            <img src="" id="imagen3" height="200px">
                            <h3 id="H"></h3>
                            <h3 id="I"></h3>
                            <button class="botonon4" id="SIG4">SIGUIENTE</button>
</div>
<div id="4" style="display: none;">
                            <img src="" id="imagen4" height="200px">
                            <h3 id="J"></h3>
                            <h3 id="K"></h3>
                            <button class="botonon4" id="SIG5">SIGUIENTE</button>
                        </div>
                        <div id="5" style="display: none;">
                            <img src="" id="imagen5" height="200px">
                            <h3 id="L"></h3>
                            <h3 id="M"></h3>
                            <button class="botonon4" id="SIG6">SIGUIENTE</button>
</div>
<div id="6" style="display: none;">
                            <img src="6" id="imagen6" height="200px">
                            <h3 id="N"></h3>
                            <h3 id="Ñ"></h3>
                            <button class="botonon4" id="terminar1">SIGUIENTE</button>
                            
                        </div>

                        </div>
                        </div>
                    </div>
                    <div id="terminar" style="display: none; position:absolute; right: 132%;">
                                
                        <div id="mostrar3">
                            <div class="card9">
                                <div class="card9-content">

                                    <h4 id="calorias">¡TERMINASTE! <br>Recuerda que cada que quieras volver a iniciar la rutina puedes volver a la sección de entrenamientos.</h4><br>
                                    <a href="entrenamiento.php">CERRAR</a> <br><br><br>
                                </div>

                            </div>
                        </div>
                    </div>
          

        </section>
    </main>
    <script>
    document.getElementById("nivel1").onclick = function() {
    document.getElementById("card1").style.display = "none";
    document.getElementById("card2").style.display = "none";
    }
    </script>
<script src="atleta_avanzado.js"></script>
<script src ="src/js/commun.js"></script>
    <script src ="src/js/transparentNavbar.js"></script>


</body>

</html>