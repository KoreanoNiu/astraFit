const abrirFile = document.querySelector('.photoInput');
const addNewPhoto = document.querySelector('#addNewPhoto');
const foto = document.querySelector('#Foto');

abrirFile.addEventListener('click', abrirFoto);
addNewPhoto.addEventListener('click', abrirFoto);

foto.addEventListener('change', subirFoto);

function abrirFoto() {
    foto.click();
}

function subirFoto(e){
    console.log(e.file);
}
