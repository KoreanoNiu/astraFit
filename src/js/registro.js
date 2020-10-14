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
        document.querySelectorAll('.sidenav-trigger')[1].classList.remove('hide')
    }
    //Validar Formulario del peso nacimiento y altura
    if (this.getAttribute('ID') == "validarPesoAltura") {
        
        var datosFormulario = document.querySelector("#formularioPesoAltura").querySelectorAll('input');
        
        datosFormulario.forEach(dato => {
            if(dato.value === ""){
                dato.style.borderColor = "red";
            }else{
                dato.style.borderColor = "#126fbb";
            }
        });

        if(datosFormulario[0].value != "" && datosFormulario[1].value != "" && datosFormulario[2].value != ""){
            var unidadMedida = document.querySelector("#formularioPesoAltura").querySelectorAll('select');
            formularioFinal.append("unidadAltura", unidadMedida[0].value);
            formularioFinal.append("unidadPeso", unidadMedida[1].value);

            formularioFinal.append("fecha", datosFormulario[0].value);
            formularioFinal.append("altura", datosFormulario[1].value);
            formularioFinal.append("peso", datosFormulario[2].value);
            
            var IMC = datosFormulario[2].value / (datosFormulario[1].value / 100 * datosFormulario[1].value / 100);
            formularioFinal.append("IMC", IMC.toFixed(2));

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

        var datosFormularioObjetivo = document.querySelector("#formObjetivo").querySelectorAll('input:checked');
        datosFormularioObjetivo.forEach(dato =>{
            formularioFinal.append("objetivo", dato.name);
        });

        var datosFormularioNivelEntrenamineto = document.querySelector("#formNivelEntrenamiento").querySelectorAll('input:checked');
        datosFormularioNivelEntrenamineto.forEach(dato =>{
            formularioFinal.append("nivel", dato.name);
        });

        var datosFormularioDiagnostico = document.querySelector("#formDiagnostico").querySelectorAll('input:checked');
        var contadorDiagnostico = 0;
        datosFormularioDiagnostico.forEach(dato =>{
            if (dato.value){
                contadorDiagnostico++;
            }
        });
        if(contadorDiagnostico > 2){
            document.querySelector('.sucess').querySelector('h1').innerHTML = "Hubo un error";
            document.querySelector('.sucess').querySelector('h3').innerHTML = "Se recomiende que visite a su médico familiar para que evalue su estado de salud";
            nextForm(this);
        }else{

            document.querySelector('.form-container').style.backgroundImage = "url('./src/img/background4.jpg')";
            this.parentNode.parentNode.parentNode.classList.toggle('hide');
            this.parentNode.parentNode.parentNode.nextElementSibling.classList.toggle('hide');
            document.querySelector('.status-bar').style.marginTop = "15rem";
            document.querySelector('.status-bar').querySelector('div').style.width = null;
            document.querySelector('.status-bar').querySelector('div').classList.add('loading-bar');

            const xhr = new XMLHttpRequest();
    
            xhr.onload = function(){
                const serverResponse = document.querySelector('#ServerResponse');
                console.log(this.responseText);
            }
            xhr.open("POST", "registro.php");
            xhr.send(formularioFinal);

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
                document.querySelectorAll('.sidenav-trigger')[1].classList.add('hide')
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