const abrirFile = document.querySelector('.photoInput');
const addNewPhoto = document.querySelector('#addNewPhoto');
const foto = document.querySelector('#Foto');

//Foto anterior y despues
const fotoAnteriorButton = document.getElementById('before');
const fotoDespuesButton = document.getElementById('after');

fotoAnteriorButton.addEventListener('click', cambiarFoto);
fotoDespuesButton.addEventListener('click', cambiarFoto);

abrirFile.addEventListener('click', abrirFoto);
addNewPhoto.addEventListener('click', abrirFoto);

foto.addEventListener('change', subirFoto);

function abrirFoto() {
    foto.click();
}

function subirFoto(){
    if(this.value != 0){

        comprobarExisteImagenes();

        var date = new Date();
        date = date.getDay() + "/" + (date.getMonth() +1) + "/" + date.getFullYear();
        var datos = new FormData(document.getElementById('frmImage'));
        datos.append("fechaCreacion", date);
    
        fetch('php/api-upload-image.php', {
            method: "POST",
            body: datos,
        }).then(response => response.json()).then(data => {obj = data
            img = document.createElement('img');
            img.src = obj['uploadDir'].slice(3, 50)
            img.classList.add('img-user');
            img.classList.add('now');
    
            document.querySelector('.formPhoto').insertBefore(img, document.getElementById('frmImage'));
            document.getElementById('frmImage').classList.add('hide');
        });
    }else{
        console.log('Selecciona un archivo por fa');
    }
}

function comprobarExisteImagenes(){
    var imgUser = document.querySelectorAll('.img-user.now');
    imgUser.forEach(img => {
        img.classList.remove('now');
        img.classList.add('after');
    });
}

// Botones fotos funcionalidad

function cambiarFoto(){
    if (this.id == 'before') {
        if (document.querySelector('.img-user.now')){
            var fotoActual = document.querySelector('.img-user.now');
    
            if(fotoActual.previousElementSibling){
                fotoActual.classList.remove('now');
                fotoActual.classList.add('after');

                fotoActual.previousElementSibling.classList.remove('after');
                fotoActual.previousElementSibling.classList.add('now');
            }else{
                console.log('no hay foto anterior');
            }
        }
    }else if(this.id == 'after'){
        if (document.querySelector('.img-user.now')){
            var fotoActual = document.querySelector('.img-user.now');
    
            if(!fotoActual.nextElementSibling.classList.contains('hide')){
                fotoActual.classList.remove('now');
                fotoActual.classList.add('after');

                fotoActual.nextElementSibling.classList.remove('after');
                fotoActual.nextElementSibling.classList.add('now');   
            }else{
                console.log('no hay foto despues');
            }
        }
    }
}