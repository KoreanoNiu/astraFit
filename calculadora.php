<?php 

    session_start();

    if(isset($_SESSION['idUsuario']) && $_SESSION['idUsuario'] != ''){
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
    <link rel="stylesheet" href="src/css/styles.css" type="TEXT/CSS">
    <link rel="stylesheet" href="src/css/stails.css" type="TEXT/CSS">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="src/img/logo.png" sizes="64x64">
    <title>CALCULADORA CALORICA</title>
</head>

<body>
    <?php include_once('php/handlebars/header.php')?>
    <main>
        <section class="background background-image-4">
            <div class="background-filter"></div>
            <div class="image-4">
                <h1>¡BIENVENIDO!</h1>
                <H2>Calculadora de calorías y macro personalizados</H2>
            </div>
        </section>
        <section class="divider hide-on-small-and-down">
        </section>
        <div class="cards2">
            <div class="card2">
                <div class="card2-content">
                    <h2>¡Bienvenido/a!</h2>
                    <p>Para lograr conseguir tu dieta con tus macronutrientes personalizados, necesitamos que rellenes
                        los campos vacíos.</p>
                    <hr>
                </div>

                <label for="peson"><b>PESO EN KG</b></label><br><br>
                <input class="cardIm" type="number" id="peso" name="Peso"><br><br>
                <label for="estatua"><b>ESTATURA EN CM</b></h4></label><br><br>
                <input class="cardIm" type="number" id="estatura" name="Altura"><br><br>
                <label for="edadita"><b>EDAD</b></label><br><br>
                <input class="cardIm" type="number" id="edad" name="Edad">
                <h4>NIVEL DE ACTIVIDAD FÍSICA</h4>

                <div class="select">
                    <select name="Nivel" id="actividad">
                        <option selected disabled>SELECCIONA TU ACTIVIDAD</option>
                        <option style="color:black; font-size: 20px; font-weight: bold; font-family: Oxygen;"
                            value="Principiante">Principiante</option><br>

                        <option style="color:black; font-size: 20px; font-weight: bold; font-family: Oxygen;"
                            value="Atleta intermedio">Atleta intermedio</option>

                        <option style="color:black; font-size: 20px; font-weight: bold; font-family: Oxygen;"
                            value="Atleta avanzado">Atleta avanzado
                        </option>
                    </select>
                </div>
                <br>


                <label for="grason"><b>PORCENTAJE DE GRASA CORPORAL</b></label><br><br>
                <input class="cardIm" type="number" id="grasa" name="porcentajeGrasa">
                <h3>Si no sabes cual es tu porcentaje de grasa corporal, aquí te colocamos una imágen para que lo
                    estimes si no lo sabes: </h3>
                <div class="cards3">
                    <div class="card3">
                        <div class="card3-image">
                            <h4>HOMBRES / MUJERES</h4>
                        </div>
                        <div class="card3-content">
                            <img style="padding:10px;border-radius: 20px;" src="src/img/GRASA2.jpg" height="250px">
                            <img style="padding:10px; border-radius: 20px;" src="src/img/GRASA1.jpg" height="250px">
                        </div>
                    </div>
                </div>
                <h4>¿Cómo quieres que sea tu dieta?</h4>
                <div class="select">
                    <select id="tipo" name="TipoDieta">
                        <option selected disabled>SELECCIONA TU TIPO</option>
                        <option>Alta en carbohidratos</option>
                        <option>Baja en carbohidratos</option>
                        <option>Alta en proteína</option>
                    </select>
                </div>
                <h4>¿Para qué objetivo quieres tu dieta?</h4>
                <div class="select">
                    <select id="tipo2" name="Objetivo">
                        <option selected disabled>SELECCIONA TU OBJETIVO</option>
                        <option>Estar en forma</option>
                        <option>Perder peso</option>
                        <option>Tonificar</option>
                    </select>
                </div>
                <h4>¿Qué fórmula quieres usar?</h4>
                <div class="select">
                    <select id="formula" name="tipoFormula">
                        <option selected disabled>SELECCIONA FÓRMULA</option>
                        <option>Con grasa corporal</option>
                        <option>Sin grasa corporal</option>
                    </select>
                </div>
                <div id="mostrar2" style="display: none;">
                    <div class="card5">
                        <div class="card5-image">
                            <h2 id="erron" style="color:red;"></h2>
                            <h4 id="dieton"></h4>
                        </div>
                        <div class="card5-content">

                            <h4 id="error1"></h4>
                            <h4 id="error2"></h4>
                            <h4 id="error3"></h4>
                            <h4 id="error4"></h4>
                            <h4 id="error5"></h4>
                            <h4 id="error6"></h4>
                            <h4 id="error7"></h4>
                            <h4 id="error"></h4>
                            <h4 id="proteina"></h4>
                            <h4 id="grasa2"></h4>
                            <h4 id="carbohidratos"></h4>
                            <h4 id="calorias"></h4>
                            <button id="cerrar" class="botonon">CERRAR</button>
                        </div>
                        <h4 id="gastadas"></h4>
                    </div>
                </div>
                <div><br><br>
                <input type="number" name="IMC" value="0" readonly style="display: none">
                    <input type="submit" class="botonon" id="dieta" value="OBTENER DIETA"></input>
                </div><br>

                <script type="text/javascript">
                    window.onload = function(){
                        var data = new FormData();
                        data.append('token', 'dieta')
                        fetch('php/api-traer-datos.php', {
                            method: "POST",
                            body: data,
                            "Content-Type": "application/json"
                        }).then(response => response.json()).then(data => {obj = data
                            console.log(data);
                            obj.forEach(element => {
                                if (!comprobarDatos(element)) {
                                    window.location.href = 'miprogreso.php?error=Completa los campos faltantes: ' + concatenarError(obj) + 'para poder obtener tu dieta';
                                }
                            });
                            document.getElementById("peso").value = obj[0]['peso'];
                            document.getElementById("estatura").value = obj[0]['altura'];
                            document.getElementById("edad").value = obj[0]['edad'];
                            document.getElementById("grasa").value = obj[0]['porcentajeGrasa'];
                            document.getElementById("formula").querySelector('option').innerHTML = obj[0]['tipoFormula'];
                            document.getElementById("actividad").querySelector('option').innerHTML = obj[0]['nivel'];
                            document.getElementById("tipo").querySelector('option').innerHTML = obj[0]['tipoDieta'];
                            document.getElementById("tipo2").querySelector('option').innerHTML = obj[0]['objetivo'];
                            document.getElementById("dieta").click();
                        });
                        
                    }
                    function comprobarDatos(element){
                        var contador = 0;
                        if (element['edad'] == '' || element['edad'] == null || element['edad'] == 0) {
                            contador++;
                        }
                        if (element['altura'] == '' || element['altura'] == null || element['edad'] == 0) {
                            contador++;
                        }
                        if (element['peso'] == '' || element['peso'] == null || element['peso'] == 0) {
                            contador++;
                        }
                        if (element['tipoDieta'] == '' || element['tipoDieta'] == null) {
                            contador++;
                        }
                        if (element['nivel'] == '' || element['nivel'] == null) {
                            contador++;
                        }
                        if (element['tipoFormula'] == '' || element['tipoFormula'] == null) {
                            contador++;
                        }
                        if (element['porcentajeGrasa'] == '' || element['porcentajeGrasa'] == null || element['porcentajeGrasa'] == 0 || element['porcentajeGrasa'] < 3) {
                            contador++;
                        }
                        if (contador == 0) {
                            return true;
                        }else{
                            return false;
                        }
                    }
                    function concatenarError(element) {
                        let error = ''
                            if (element[0]['edad'] == '' || element[0]['edad'] == null || element[0]['edad'] == 0) {
                                error += 'Edad, ';
                            }
                            if (element[0]['altura'] == '' || element[0]['altura'] == null || element[0]['altura'] == 0) {
                                if (element[0]['altura'] <= 120) {
                                    error +=  'La Altura es menor a lo permitido, ';
                                }else{
                                    error +=  'Altura, ';
                                }
                            }
                            if (element[0]['peso'] == '' || element[0]['peso'] == null || element[0]['peso'] == 0) {
                                if (element[0]['peso'] <= 40) {
                                    error += 'El peso es menor a lo permitido, ';
                                }else{
                                    error += 'Peso, ';
                                }
                            }
                            if (element[0]['tipoDieta'] == '' || element[0]['tipoDieta'] == null) {
                                error += 'Tipo dieta, ';
                            }
                            if (element[0]['nivel'] == '' || element[0]['nivel'] == null) {
                                error += 'Nivel, ';
                            }
                            if (element[0]['tipoFormula'] == '' || element[0]['tipoFormula'] == null) {
                                error += 'Tipo formula, ';
                            }
                            if (element[0]['porcentajeGrasa'] == '' || element[0]['porcentajeGrasa'] == null || element[0]['porcentajeGrasa'] < 3) {
                                if (element[0]['porcentajeGrasa'] < 3) {
                                    error += 'El porcentaje grasa es menor a 3, ';
                                }else{
                                    error += 'Porcentaje grasa, ';
                                }
                            }
                        return error;
                    }

                    document.getElementById("cerrar").onclick = function () {
                        document.getElementById("mostrar2").style.display = "none";
                    }
                    document.getElementById("dieta").onclick = function () {
                        var peso;
                        var grasa;
                        var actividad;
                        var tipo;
                        var tipo2;
                        var calorias;
                        var masaMagra;
                        var masaMagra2;
                        var proteina;
                        var grasa2;
                        var formula;
                        var edad;
                        var estatura;
                        formula = document.getElementById("formula").value;
                        edad = document.getElementById("edad").value;
                        estatura = document.getElementById("estatura").value;
                        peso = document.getElementById("peso").value;
                        grasa = document.getElementById("grasa").value;
                        grasa2 = document.getElementById("grasa2").value;
                        actividad = document.getElementById("actividad").value;
                        tipo = document.getElementById("tipo").value;
                        tipo2 = document.getElementById("tipo2").value;

                        if (grasa == '' || peso == '' || estatura == '' || edad == '' || actividad ==
                            "SELECCIONA TU ACTIVIDAD" || tipo == "SELECCIONA TU TIPO" || tipo2 ==
                            "SELECCIONA TU OBJETIVO" || formula == "SELECCIONA FÓRMULA") {
                            document.getElementById("mostrar2").style.display = "block";
                            document.getElementById("erron").innerHTML = "¡ERROR!";
                            document.getElementById("dieton").innerHTML = "";
                            document.getElementById("proteina").innerHTML = "";
                            document.getElementById("carbohidratos").innerHTML = "";
                            document.getElementById("grasa2").innerHTML = "";
                            document.getElementById("calorias").innerHTML = "";
                            document.getElementById("gastadas").innerHTML = "";
                            if (actividad == "SELECCIONA TU ACTIVIDAD") {
                                document.getElementById("error4").innerHTML = "Falta seleccionar actividad";
                            } else {
                                document.getElementById("error4").innerHTML = "";
                            }

                            if (tipo == "SELECCIONA TU TIPO") {
                                document.getElementById("error5").innerHTML = "Falta seleccionar tipo de dieta";
                            } else {
                                document.getElementById("error5").innerHTML = "";
                            }

                            if (tipo2 == "SELECCIONA TU OBJETIVO") {
                                document.getElementById("error6").innerHTML = "Falta seleccionar objetivo";
                            } else {
                                document.getElementById("error6").innerHTML = "";
                            }

                            if (formula == "SELECCIONA FÓRMULA") {
                                document.getElementById("error7").innerHTML = "Falta seleccionar fórmula";
                            } else {
                                document.getElementById("error7").innerHTML = "";
                            }

                            if (grasa == '') {

                                document.getElementById("error").innerHTML =
                                    "Falta ingresar tu porcentaje de grasa corporal";
                            } else {

                                document.getElementById("error").innerHTML = "";
                            }
                            if (peso == '') {

                                document.getElementById("error1").innerHTML = "Falta ingresar tu peso";
                            } else {

                                document.getElementById("error1").innerHTML = "";
                            }
                            if (estatura == '') {

                                document.getElementById("error2").innerHTML = "Falta ingresar tu estatura";
                            } else {

                                document.getElementById("error2").innerHTML = "";
                            }
                            if (edad == '') {

                                document.getElementById("error3").innerHTML = "Falta ingresar tu edad";
                            } else {
                                document.getElementById("error3").innerHTML = "";

                            }
                        } else {
                            document.getElementById("mostrar2").style.display = "block";
                            document.getElementById("dieton").innerHTML = "DIETA: ";
                            document.getElementById("erron").innerHTML = "";
                            document.getElementById("error").innerHTML = "";
                            document.getElementById("error1").innerHTML = "";
                            document.getElementById("error2").innerHTML = "";
                            document.getElementById("error3").innerHTML = "";
                            document.getElementById("error4").innerHTML = "";
                            document.getElementById("error5").innerHTML = "";
                            document.getElementById("error6").innerHTML = "";
                            document.getElementById("error7").innerHTML = "";
                            if (formula == "Sin grasa corporal") {

                                if (actividad == "Principiante") {
                                    Math.round(calorias = peso * 22 * 1.2);
                                }
                                if (actividad ==
                                    "Poco activo (1 hora de ejercicio y el resto del día sedentario)") {
                                    Math.round(calorias = peso * 22 * 1.3);

                                }
                                if (actividad ==
                                    "Ligeramente activo (Parte del día en movimiento y 1 o más horas de ejercicio)"
                                    ) {
                                    Math.round(calorias = peso * 22 * 1.5);

                                }
                                if (actividad ==
                                    "Atleta intermedio") {
                                    Math.round(calorias = peso * 22 * 1.8);

                                }
                                if (actividad ==
                                    "Atleta avanzado") {
                                    Math.round(calorias = peso * 22 * 2.2);

                                }
                                //______________________________
                                var comida;
                                var grasita;
                                var carbos;
                                if (tipo == "Alta en carbohidratos" && tipo2 ==
                                    "Estar en forma") {
                                    proteina = Math.round(peso * 1.8);
                                    calorias2 = Math.round(calorias);
                                    comida = Math.round(calorias2 - (proteina * 4));
                                    carbos = Math.round((comida * 0.70) / 4);
                                    grasita = Math.round((comida * 0.30) / 9);
                                    document.getElementById("proteina").innerHTML = Math.round(proteina) +
                                        " gramos de proteína diarios.";
                                    document.getElementById("grasa2").innerHTML = Math.round(grasita) +
                                        " gramos de grasa diarios.";
                                    document.getElementById("carbohidratos").innerHTML = Math.round(carbos) +
                                        " gramos de carbohidrato diarios.";
                                    document.getElementById("calorias").innerHTML = proteina * 4 + grasita * 9 +
                                        carbos * 4 + " calorías diarias.";
                                }
                                if (tipo == "Alta en carbohidratos" && tipo2 ==
                                    "Perder peso") {
                                    proteina = Math.round(peso * 2);
                                    calorias2 = Math.round(calorias - 500);
                                    comida = Math.round(calorias2 - (proteina * 4));
                                    carbos = Math.round((comida * 0.70) / 4);
                                    grasita = Math.round((comida * 0.30) / 9);
                                    document.getElementById("proteina").innerHTML = Math.round(proteina) +
                                        " gramos de proteína diarios.";
                                    document.getElementById("grasa2").innerHTML = Math.round(grasita) +
                                        " gramos de grasa diarios.";
                                    document.getElementById("carbohidratos").innerHTML = Math.round(carbos) +
                                        " gramos de carbohidrato diarios.";
                                    document.getElementById("calorias").innerHTML = proteina * 4 + grasita * 9 +
                                        carbos * 4 + " calorías diarias.";
                                }
                                if (tipo == "Alta en carbohidratos" && tipo2 ==
                                    "Tonificar") {
                                    proteina = Math.round(peso * 2.2);
                                    calorias2 = Math.round(calorias + 500);
                                    comida = Math.round(calorias2 - (proteina * 4));
                                    carbos = Math.round((comida * 0.70) / 4);
                                    grasita = Math.round((comida * 0.30) / 9);
                                    document.getElementById("proteina").innerHTML = Math.round(proteina) +
                                        " gramos de proteína diarios.";
                                    document.getElementById("grasa2").innerHTML = Math.round(grasita) +
                                        " gramos de grasa diarios.";
                                    document.getElementById("carbohidratos").innerHTML = Math.round(carbos) +
                                        " gramos de carbohidrato diarios.";
                                    document.getElementById("calorias").innerHTML = proteina * 4 + grasita * 9 +
                                        carbos * 4 + " calorías diarias.";
                                }
                                //_____________________________

                                if (tipo == "Baja en carbohidratos" && tipo2 ==
                                    "Estar en forma") {
                                    proteina = Math.round(peso * 1.8);
                                    calorias2 = Math.round(calorias);
                                    comida = Math.round(calorias2 - (proteina * 4));
                                    grasita = Math.round((comida * 0.70) / 9);
                                    carbos = Math.round((comida * 0.30) / 4);
                                    document.getElementById("proteina").innerHTML = Math.round(proteina) +
                                        " gramos de proteína diarios.";
                                    document.getElementById("grasa2").innerHTML = Math.round(grasita) +
                                        " gramos de grasa diarios.";
                                    document.getElementById("carbohidratos").innerHTML = Math.round(carbos) +
                                        " gramos de carbohidrato diarios.";
                                    document.getElementById("calorias").innerHTML = proteina * 4 + grasita * 9 +
                                        carbos * 4 + " calorías diarias.";
                                }
                                if (tipo == "Baja en carbohidratos" && tipo2 ==
                                    "Perder peso") {
                                    proteina = Math.round(peso * 2);
                                    calorias2 = Math.round(calorias - 500);
                                    comida = Math.round(calorias2 - (proteina * 4));
                                    grasita = Math.round((comida * 0.70) / 9);
                                    carbos = Math.round((comida * 0.30) / 4);
                                    document.getElementById("proteina").innerHTML = Math.round(proteina) +
                                        " gramos de proteína diarios.";
                                    document.getElementById("grasa2").innerHTML = Math.round(grasita) +
                                        " gramos de grasa diarios.";
                                    document.getElementById("carbohidratos").innerHTML = Math.round(carbos) +
                                        " gramos de carbohidrato diarios.";
                                    document.getElementById("calorias").innerHTML = proteina * 4 + grasita * 9 +
                                        carbos * 4 + " calorías diarias.";
                                }
                                if (tipo == "Baja en carbohidratos" && tipo2 ==
                                    "Tonificar") {
                                    proteina = Math.round(peso * 2.2);
                                    calorias2 = Math.round(calorias + 500);
                                    comida = Math.round(calorias2 - (proteina * 4));
                                    grasita = Math.round((comida * 0.70) / 9);
                                    carbos = Math.round((comida * 0.30) / 4);
                                    document.getElementById("proteina").innerHTML = Math.round(proteina) +
                                        " gramos de proteína diarios.";
                                    document.getElementById("grasa2").innerHTML = Math.round(grasita) +
                                        " gramos de grasa diarios.";
                                    document.getElementById("carbohidratos").innerHTML = Math.round(carbos) +
                                        " gramos de carbohidrato diarios.";
                                    document.getElementById("calorias").innerHTML = proteina * 4 + grasita * 9 +
                                        carbos * 4 + " calorías diarias.";
                                }

                                //_________________________

                                if (tipo == "Alta en proteína" && tipo2 ==
                                    "Estar en forma") {
                                    proteina = Math.round(peso * 2.3);
                                    calorias2 = Math.round(calorias);
                                    comida = Math.round(calorias2 - (proteina * 4));
                                    grasita = Math.round((comida * 0.60) / 9);
                                    carbos = Math.round((comida * 0.40) / 4);
                                    document.getElementById("proteina").innerHTML = Math.round(proteina) +
                                        " gramos de proteína diarios.";
                                    document.getElementById("grasa2").innerHTML = Math.round(grasita) +
                                        " gramos de grasa diarios.";
                                    document.getElementById("carbohidratos").innerHTML = Math.round(carbos) +
                                        " gramos de carbohidrato diarios.";
                                    document.getElementById("calorias").innerHTML = proteina * 4 + grasita * 9 +
                                        carbos * 4 + " calorías diarias.";
                                }
                                if (tipo == "Alta en proteína" && tipo2 ==
                                    "Perder peso") {
                                    proteina = Math.round(peso * 2.4);
                                    calorias2 = Math.round(calorias - 500);
                                    comida = Math.round(calorias2 - (proteina * 4));
                                    grasita = Math.round((comida * 0.60) / 9);
                                    carbos = Math.round((comida * 0.40) / 4);
                                    document.getElementById("proteina").innerHTML = Math.round(proteina) +
                                        " gramos de proteína diarios.";
                                    document.getElementById("grasa2").innerHTML = Math.round(grasita) +
                                        " gramos de grasa diarios.";
                                    document.getElementById("carbohidratos").innerHTML = Math.round(carbos) +
                                        " gramos de carbohidrato diarios.";
                                    document.getElementById("calorias").innerHTML = proteina * 4 + grasita * 9 +
                                        carbos * 4 + " calorías diarias.";
                                }
                                if (tipo == "Alta en proteína" && tipo2 ==
                                    "Tonificar") {
                                    proteina = Math.round(peso * 2.5);
                                    calorias2 = Math.round(calorias + 500);
                                    comida = Math.round(calorias2 - (proteina * 4));
                                    grasita = Math.round((comida * 0.60) / 9);
                                    carbos = Math.round((comida * 0.40) / 4);
                                    document.getElementById("proteina").innerHTML = Math.round(proteina) +
                                        " gramos de proteína diarios.";
                                    document.getElementById("grasa2").innerHTML = Math.round(grasita) +
                                        " gramos de grasa diarios.";
                                    document.getElementById("carbohidratos").innerHTML = Math.round(carbos) +
                                        " gramos de carbohidrato diarios.";
                                    document.getElementById("calorias").innerHTML = proteina * 4 + grasita * 9 +
                                        carbos * 4 + " calorías diarias.";
                                }
                            }
                            if (formula == "Con grasa corporal") {
                                masaMagra = (peso * grasa) / 100;
                                masaMagra2 = peso - masaMagra;
                                if (actividad == "Principiante") {
                                    Math.round(calorias = (370 + (21.6 * masaMagra2)) * 1.2);
                                }
                                if (actividad ==
                                    "Poco activo (1 hora de ejercicio y el resto del día sedentario)") {
                                    Math.round(calorias = (370 + (21.6 * masaMagra2)) * 1.3);

                                }
                                if (actividad ==
                                    "Ligeramente activo (Parte del día en movimiento y 1 o más horas de ejercicio)"
                                    ) {
                                    Math.round(calorias = (370 + (21.6 * masaMagra2)) * 1.5);

                                }
                                if (actividad ==
                                    "Atleta intermedio") {
                                    Math.round(calorias = (370 + (21.6 * masaMagra2)) * 1.8);

                                }
                                if (actividad ==
                                    "Atleta avanzado") {
                                    Math.round(calorias = (370 + (21.6 * masaMagra2)) * 2.2);

                                }
                                //______________________________
                                var comida;
                                var grasita;
                                var carbos;
                                if (tipo == "Alta en carbohidratos" && tipo2 ==
                                    "Estar en forma") {
                                    proteina = Math.round(peso * 1.8);
                                    calorias2 = Math.round(calorias);
                                    comida = Math.round(calorias2 - (proteina * 4));
                                    carbos = Math.round((comida * 0.70) / 4);
                                    grasita = Math.round((comida * 0.30) / 9);

                                    document.getElementById("proteina").innerHTML = Math.round(proteina) +
                                        " gramos de proteína diarios.";
                                    document.getElementById("grasa2").innerHTML = Math.round(grasita) +
                                        " gramos de grasa diarios.";
                                    document.getElementById("carbohidratos").innerHTML = Math.round(carbos) +
                                        " gramos de carbohidrato diarios.";
                                    document.getElementById("calorias").innerHTML = proteina * 4 + grasita * 9 +
                                        carbos * 4 + " calorías diarias.";
                                }
                                if (tipo == "Alta en carbohidratos" && tipo2 ==
                                    "Perder peso") {
                                    proteina = Math.round(peso * 2);
                                    calorias2 = Math.round(calorias - 500);
                                    comida = Math.round(calorias2 - (proteina * 4));
                                    carbos = Math.round((comida * 0.70) / 4);
                                    grasita = Math.round((comida * 0.30) / 9);

                                    document.getElementById("proteina").innerHTML = Math.round(proteina) +
                                        " gramos de proteína diarios.";
                                    document.getElementById("grasa2").innerHTML = Math.round(grasita) +
                                        " gramos de grasa diarios.";
                                    document.getElementById("carbohidratos").innerHTML = Math.round(carbos) +
                                        " gramos de carbohidrato diarios.";
                                    document.getElementById("calorias").innerHTML = proteina * 4 + grasita * 9 +
                                        carbos * 4 + " calorías diarias.";
                                }
                                if (tipo == "Alta en carbohidratos" && tipo2 ==
                                    "Tonificar") {
                                    proteina = Math.round(peso * 2.2);
                                    calorias2 = Math.round(calorias + 500);
                                    comida = Math.round(calorias2 - (proteina * 4));
                                    carbos = Math.round((comida * 0.70) / 4);
                                    grasita = Math.round((comida * 0.30) / 9);

                                    document.getElementById("proteina").innerHTML = Math.round(proteina) +
                                        " gramos de proteína diarios.";
                                    document.getElementById("grasa2").innerHTML = Math.round(grasita) +
                                        " gramos de grasa diarios.";
                                    document.getElementById("carbohidratos").innerHTML = Math.round(carbos) +
                                        " gramos de carbohidrato diarios.";
                                    document.getElementById("calorias").innerHTML = proteina * 4 + grasita * 9 +
                                        carbos * 4 + " calorías diarias.";
                                }
                                //_____________________________

                                if (tipo == "Baja en carbohidratos" && tipo2 ==
                                    "Estar en forma") {
                                    proteina = Math.round(peso * 1.8);
                                    calorias2 = Math.round(calorias);
                                    comida = Math.round(calorias2 - (proteina * 4));
                                    grasita = Math.round((comida * 0.70) / 9);
                                    carbos = Math.round((comida * 0.30) / 4);

                                    document.getElementById("proteina").innerHTML = Math.round(proteina) +
                                        " gramos de proteína diarios.";
                                    document.getElementById("grasa2").innerHTML = Math.round(grasita) +
                                        " gramos de grasa diarios.";
                                    document.getElementById("carbohidratos").innerHTML = Math.round(carbos) +
                                        " gramos de carbohidrato diarios.";
                                    document.getElementById("calorias").innerHTML = proteina * 4 + grasita * 9 +
                                        carbos * 4 + " calorías diarias.";
                                }
                                if (tipo == "Baja en carbohidratos" && tipo2 ==
                                    "Perder peso") {
                                    proteina = Math.round(peso * 2);
                                    calorias2 = Math.round(calorias - 500);
                                    comida = Math.round(calorias2 - (proteina * 4));
                                    grasita = Math.round((comida * 0.70) / 9);
                                    carbos = Math.round((comida * 0.30) / 4);

                                    document.getElementById("proteina").innerHTML = Math.round(proteina) +
                                        " gramos de proteína diarios.";
                                    document.getElementById("grasa2").innerHTML = Math.round(grasita) +
                                        " gramos de grasa diarios.";
                                    document.getElementById("carbohidratos").innerHTML = Math.round(carbos) +
                                        " gramos de carbohidrato diarios.";
                                    document.getElementById("calorias").innerHTML = proteina * 4 + grasita * 9 +
                                        carbos * 4 + " calorías diarias.";
                                }
                                if (tipo == "Baja en carbohidratos" && tipo2 ==
                                    "Tonificar") {
                                    proteina = Math.round(peso * 2.2);
                                    calorias2 = Math.round(calorias + 500);
                                    comida = Math.round(calorias2 - (proteina * 4));
                                    grasita = Math.round((comida * 0.70) / 9);
                                    carbos = Math.round((comida * 0.30) / 4);

                                    document.getElementById("proteina").innerHTML = Math.round(proteina) +
                                        " gramos de proteína diarios.";
                                    document.getElementById("grasa2").innerHTML = Math.round(grasita) +
                                        " gramos de grasa diarios.";
                                    document.getElementById("carbohidratos").innerHTML = Math.round(carbos) +
                                        " gramos de carbohidrato diarios.";
                                    document.getElementById("calorias").innerHTML = proteina * 4 + grasita * 9 +
                                        carbos * 4 + " calorías diarias.";
                                }

                                //_________________________

                                if (tipo == "Alta en proteína" && tipo2 ==
                                    "Estar en forma") {
                                    proteina = Math.round(peso * 2.3);
                                    calorias2 = Math.round(calorias);
                                    comida = Math.round(calorias2 - (proteina * 4));
                                    grasita = Math.round((comida * 0.60) / 9);
                                    carbos = Math.round((comida * 0.40) / 4);

                                    document.getElementById("proteina").innerHTML = Math.round(proteina) +
                                        " gramos de proteína diarios.";
                                    document.getElementById("grasa2").innerHTML = Math.round(grasita) +
                                        " gramos de grasa diarios.";
                                    document.getElementById("carbohidratos").innerHTML = Math.round(carbos) +
                                        " gramos de carbohidrato diarios.";
                                    document.getElementById("calorias").innerHTML = proteina * 4 + grasita * 9 +
                                        carbos * 4 + " calorías diarias.";
                                }
                                if (tipo == "Alta en proteína" && tipo2 ==
                                    "Perder peso") {
                                    proteina = Math.round(peso * 2.4);
                                    calorias2 = Math.round(calorias - 500);
                                    comida = Math.round(calorias2 - (proteina * 4));
                                    grasita = Math.round((comida * 0.60) / 9);
                                    carbos = Math.round((comida * 0.40) / 4);
                                    document.getElementById("proteina").innerHTML = Math.round(proteina) +
                                        " gramos de proteína diarios.";
                                    document.getElementById("grasa2").innerHTML = Math.round(grasita) +
                                        " gramos de grasa diarios.";
                                    document.getElementById("carbohidratos").innerHTML = Math.round(carbos) +
                                        " gramos de carbohidrato diarios.";
                                    document.getElementById("calorias").innerHTML = proteina * 4 + grasita * 9 +
                                        carbos * 4 + " calorías diarias.";
                                }
                                if (tipo == "Alta en proteína" && tipo2 ==
                                    "Tonificar") {
                                    proteina = Math.round(peso * 2.5);
                                    calorias2 = Math.round(calorias + 500);
                                    comida = Math.round(calorias2 - (proteina * 4));
                                    grasita = Math.round((comida * 0.60) / 9);
                                    carbos = Math.round((comida * 0.40) / 4);

                                    document.getElementById("proteina").innerHTML = Math.round(proteina) +
                                        " gramos de proteína diarios.";
                                    document.getElementById("grasa2").innerHTML = Math.round(grasita) +
                                        " gramos de grasa diarios.";
                                    document.getElementById("carbohidratos").innerHTML = Math.round(carbos) +
                                        " gramos de carbohidrato diarios.";
                                    document.getElementById("calorias").innerHTML = proteina * 4 + grasita * 9 +
                                        carbos * 4 + " calorías diarias.";
                                }
                            }
                        }
                    }
                </script>
            </div>

            <?php include_once('php/handlebars/footer.php'); ?>
    </main>
    <script src ="src/js/progreso-app.js"></script>
    <script src ="src/js/commun.js"></script>
    <script src="src/js/photo-profile.js"></script>
</body>

</html>