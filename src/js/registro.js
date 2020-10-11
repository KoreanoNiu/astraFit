
var presionada = document.querySelectorAll('label');
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
    this.parentNode.parentNode.parentNode.classList.toggle('hide');
    this.parentNode.parentNode.parentNode.nextElementSibling.classList.toggle('hide');
    contadorEstadoFormulario += 16.666;
    document.querySelector('.status-bar').querySelector('div').style.width = "" + contadorEstadoFormulario + "%";
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