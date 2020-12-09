var presionada = document.querySelectorAll('.buttonLabel');
var formularioFinal = new FormData();
const regresarAnteriorBoton = document.querySelector('.backForm');
var contadorEstadoFormulario = 0;

presionada.forEach(boton => {
    boton.addEventListener('click', siguiente);
});
regresarAnteriorBoton.addEventListener('click', anterior);

function siguiente(){
    if (this.getAttribute('for') == "gender1" || this.getAttribute('for') == "gender2"){
        document.querySelector('.sidenav-trigger').classList.remove('hide')
    }
    //Validar Formulario del peso nacimiento y altura
    if (this.getAttribute('ID') == "validarPesoAltura") {
        
        var datosFormulario = document.querySelector("#formularioPesoAltura").querySelectorAll('input');
        if (validarDatosUsuario(datosFormulario)){
            var unidadMedida = document.querySelector("#formularioPesoAltura").querySelectorAll('select');
            formularioFinal.append("unidadAltura", unidadMedida[0].value);
            formularioFinal.append("unidadPeso", unidadMedida[1].value);

            var date = new Date();
            formularioFinal.append("edad", parseInt(date.getFullYear()) - parseInt((datosFormulario[0].value).slice(0, 4)));
            formularioFinal.append("altura", datosFormulario[1].value);
            formularioFinal.append("peso", datosFormulario[2].value);
            formularioFinal.append("porcentajeGrasa", datosFormulario[3].value);

            nextForm(this);
        }
    }
    if(this.getAttribute('ID') == "validarDatosCuenta"){
        var datosFormulario = document.querySelector("#formularioDatosCuenta").querySelectorAll('input');

        datosFormulario.forEach(dato => {
            if(dato.value === ""){
                dato.style.borderColor = "red";
            }else{
                dato.style.borderColor = "#126fbb";
            }
        });

        if(validarEmail(datosFormulario[1].value)){
            if(datosFormulario[0].value != "" && datosFormulario[1].value != "" && datosFormulario[2].value != ""){
            
                formularioFinal.append("nombreUsuario", datosFormulario[0].value);
                formularioFinal.append("email", datosFormulario[1].value);
                formularioFinal.append("contrasena", datosFormulario[2].value);
    
                nextForm(this);
            }
        }else{
            datosFormulario[1].style.borderColor = "red";
        }
    }
    if(this.getAttribute('ID') == "enviarFormulario"){
        var datosFormularioGenero = document.querySelector("#formGenero").querySelectorAll('input:checked');

        datosFormularioGenero.forEach(dato => {
            if(dato.name == "gender1"){
                formularioFinal.append("genero", "femenino");
            }else{
                formularioFinal.append("genero", "masculino");
            }
        });

        var datosFormularioObjetivo = document.querySelector("#formObjetivo").querySelector('input:checked');
        formularioFinal.append("objetivo", datosFormularioObjetivo.name);

        var datosFormularioNivelEntrenamineto = document.querySelector("#formNivelEntrenamiento").querySelector('input:checked');
        formularioFinal.append("nivel", datosFormularioNivelEntrenamineto.value);

        var datosFormularioDiagnostico = document.querySelector("#formDiagnostico").querySelectorAll('input:checked');
        var contadorDiagnostico = 0;
        datosFormularioDiagnostico.forEach(dato =>{
            if (dato.value){
                contadorDiagnostico++;
            }
        });
        if(contadorDiagnostico > 2){
            document.querySelector('.sucess').querySelector('h1').innerHTML = "Hubo un error";
            document.querySelector('.sucess').querySelector('h3').innerHTML = "Se recomiende que visite a su médico de confianza para que evalue su estado de salud";
            nextForm(this);
        }else{

            document.querySelector('.form-container').style.backgroundImage = "url('./src/img/background4.jpg')";
            this.parentNode.parentNode.parentNode.classList.toggle('hide');
            this.parentNode.parentNode.parentNode.nextElementSibling.classList.toggle('hide');
            document.querySelector('.status-bar').style.marginTop = "15rem";
            document.querySelector('.status-bar').querySelector('div').style.width = null;
            document.querySelector('.status-bar').querySelector('div').classList.add('loading-bar');

            fetch('php/registro-api.php', {
                method: "POST",
                body: formularioFinal,
                "Content-Type": "application/json"
            }).then(response => response.json()).then(data => {obj = data
                //console.log(data);
            });

            setTimeout(function(){
                window.location.replace("/astraFit/miprogreso.php");
            }, 10000);
        }
    }
    if(this.classList.contains('nosubmit')){
        nextForm(this);
    }
}

function anterior(){
    var anteriores = document.querySelectorAll('.form-content');
    anteriores.forEach(actual => {
        if(!actual.classList.contains('hide')){
            actual.classList.toggle('hide');
            actual.previousElementSibling.classList.toggle('hide');
            contadorEstadoFormulario -= 16.666;
            document.querySelector('.status-bar').querySelector('div').style.width = "" + contadorEstadoFormulario + "%";
            if(actual.previousElementSibling.querySelector('form').classList.contains('columns-form')){
                document.querySelector('.sidenav-trigger').classList.add('hide')
            }
        }
    });
}

function validarEmail(email){
    if(/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(email)){
        return true;
    }else{
        return false;
    }
}

function nextForm(e){
    e.classList.add('selected');

    e.parentNode.parentNode.parentNode.classList.toggle('hide');
    e.parentNode.parentNode.parentNode.nextElementSibling.classList.toggle('hide');
    contadorEstadoFormulario += 16.666;
    document.querySelector('.status-bar').querySelector('div').style.width = "" + contadorEstadoFormulario + "%";
}

function validarDatosUsuario(array){
    var errorCount = 0;
    array.forEach(input => {
        if(input.value === ""){
            input.style.borderColor = "red";
            errorCount++;
        }else{

            if(input.name == 'Altura'){
                if(input.value < 200 && input.value > 120 && isNaN(input.value) == false){
                    input.style.borderColor = "#126fbb";
                }else{
                    input.style.borderColor = "red";
                    errorCount++;
                }
            }
            if(input.name == 'Peso'){
                if(input.value > 30 && input.value < 150 && isNaN(input.value) == false){
                    input.style.borderColor = "#126fbb";
                }else{
                    input.style.borderColor = "red";
                    errorCount++;
                }
            }
            if(input.name == 'fechaNacimiento'){
                var date = new Date();
                if (parseInt(date.getFullYear()) - parseInt((input.value).slice(0, 4)) < 11){
                    input.style.borderColor = "red";
                    errorCount++;
                }else{
                    input.style.borderColor = "#126fbb";
                }
            }
            if (input.name == 'porcentajeGrasa' && isNaN(input.value) == false) {
                if (input.value >= 4 && input.value <= 50) {
                    input.style.borderColor = "#126fbb";
                }else{
                    input.style.borderColor = "red";
                    errorCount++;
                }
            }
        }
    });
    if (errorCount == 0) {
        return true;
    }else{
        return false;
    }
}