const abrirFile = document.querySelector('.photoInput');
const foto = document.querySelector('#Foto');

abrirFile.addEventListener('click', abrirFoto);
foto.addEventListener('change', subirFoto);

function abrirFoto() {
    foto.click();
}

function subirFoto(e){
    console.log(e.file);
}
