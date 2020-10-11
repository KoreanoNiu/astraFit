
var presionada = document.querySelectorAll('label');
var contadorEstadoFormulario = 0;

presionada.forEach(boton => {
    boton.addEventListener('click', siguiente);
});


function siguiente(){
    this.parentNode.parentNode.parentNode.classList.toggle('hide');
    this.parentNode.parentNode.parentNode.nextElementSibling.classList.toggle('hide');
    contadorEstadoFormulario += 16.666;
    document.querySelector('.status-bar').querySelector('div').style.width = "" + contadorEstadoFormulario + "%";
}