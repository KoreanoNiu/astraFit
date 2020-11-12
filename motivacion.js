let contenidos = document.querySelectorAll('.imagen');

function cambiar(){
    this.classList.toggle('flip');
}  

contenidos.forEach(contenido => contenido.addEventListener('click', cambiar));
