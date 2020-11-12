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
    // console.log(this.files.length);
    // console.log(Math.round((this.files.item(0).size / 1024)));
    if (this.files.length > 0){
        if(Math.round((this.files.item(0).size / 1024)) < 8192){
            if(this.files.item(0).type == 'image/jpeg' || this.files.item(0).type == 'image/png'){

                comprobarExisteImagenes();
        
                var date = new Date();
                date = date.getHours() + ":" + date.getMinutes() + " " + date.getDay() + "/" + (date.getMonth() +1) + "/" + date.getFullYear();
                // console.log(date);
                var datos = new FormData(document.getElementById('frmImage'));
                datos.append("fechaCreacion", date);
            
                fetch('php/api-upload-image.php', {
                    method: "POST",
                    body: datos,
                }).then(response => response.json()).then(data => {obj = data
                    div = document.createElement('div');
                    div.classList.add('img-user');
                    div.classList.add('now');
                    div.innerHTML = `
                                        <div class="header-img">
                                            <h2>${obj['fechaCreacion']}</h2>
                                            <div class="delete-img">
                                                <svg viewBox="0 0 512 512"  xmlns="http://www.w3.org/2000/svg" onclick="eliminarFoto('${obj['uploadDir']}', '${obj['fechaCreacion']}')">
                                                    <path d="m256 0c-141.164062 0-256 114.835938-256 256s114.835938 256 256 256 256-114.835938 256-256-114.835938-256-256-256zm0 0" fill="#126fbb"/>
                                                    <path d="m350.273438 320.105469c8.339843 8.34375 8.339843 21.824219 0 30.167969-4.160157 4.160156-9.621094 6.25-15.085938 6.25-5.460938 0-10.921875-2.089844-15.082031-6.25l-64.105469-64.109376-64.105469 64.109376c-4.160156 4.160156-9.621093 6.25-15.082031 6.25-5.464844 0-10.925781-2.089844-15.085938-6.25-8.339843-8.34375-8.339843-21.824219 0-30.167969l64.109376-64.105469-64.109376-64.105469c-8.339843-8.34375-8.339843-21.824219 0-30.167969 8.34375-8.339843 21.824219-8.339843 30.167969 0l64.105469 64.109376 64.105469-64.109376c8.34375-8.339843 21.824219-8.339843 30.167969 0 8.339843 8.34375 8.339843 21.824219 0 30.167969l-64.109376 64.105469zm0 0" fill="#fafafa"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <img src = "${obj['uploadDir'].slice(3, 50)}">`;
            
                    window.scrollTo(0, document.querySelector('.progress-container').offsetTop);
                    
                    // console.log(div);

                    document.querySelector('.formPhoto').insertBefore(div, document.getElementById('frmImage'));
                    document.getElementById('frmImage').classList.add('hide');
                });
            }else{
                // console.log('Tipo de archivo incorrecto, ingresa un jpg/jpeg o png');
                msgError = document.createElement('div');
                msgError.classList.add('error-msg');
                msgError.innerHTML = `
                                        <div class="msg-container">
                                            <div class="msg">
                                                <h2>Ingresa una imagen con el formato de archivo valido (.jpg, .png)</h2>
                                            </div>
                                            <div class="button-error-msg" onclick="this.parentNode.parentNode.remove();">
                                                <label for="button-error-msg">Aceptar</label>
                                            </div>
                                        </div>`;
                document.body.appendChild(msgError);
            }
        }else{
            // console.log('Es mayor a 8 mb');
            msgError = document.createElement('div');
            msgError.classList.add('error-msg');
            msgError.innerHTML = `
                                    <div class="msg-container">
                                        <div class="msg">
                                            <h2>El tamaño de la imagen debe ser menor a 8mb</h2>
                                        </div>
                                        <div class="button-error-msg" onclick="this.parentNode.parentNode.remove();">
                                            <label for="button-error-msg">Aceptar</label>
                                        </div>
                                    </div>`;
            document.body.appendChild(msgError);
        }
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
            this.style.backgroundColor = '#126fbb';
            fotoDespuesButton.style.backgroundColor = '#126fbb';
            var fotoActual = document.querySelector('.img-user.now');
    
            if(fotoActual.previousElementSibling){
                fotoActual.classList.remove('now');
                fotoActual.classList.add('after');
    
                window.scrollTo(0, document.querySelector('.progress-container').offsetTop);

                fotoActual.previousElementSibling.classList.remove('after');
                fotoActual.previousElementSibling.classList.add('now');
            }else{
                this.style.backgroundColor = 'red';
            }
        }
    }else if(this.id == 'after'){
        if (document.querySelector('.img-user.now')){
            this.style.backgroundColor = '#126fbb';
            fotoAnteriorButton.style.backgroundColor = '#126fbb';
            var fotoActual = document.querySelector('.img-user.now');
    
            if(!fotoActual.nextElementSibling.classList.contains('hide')){
                fotoActual.classList.remove('now');
                fotoActual.classList.add('after');

                window.scrollTo(0, document.querySelector('.progress-container').offsetTop);

                fotoActual.nextElementSibling.classList.remove('after');
                fotoActual.nextElementSibling.classList.add('now');   
            }else{
                this.style.backgroundColor = 'red';
            }
        }
    }
}

function eliminarFoto(url, fechaCreacion){
    if (document.querySelectorAll('.img-user').length <= 1) {
        document.querySelector('.img-user.now').remove();

        document.getElementById('frmImage').classList.remove('hide');
    }else{
        actual = document.querySelector('.img-user.now');
        
        if (actual.previousElementSibling == null) {
            actual.nextElementSibling.classList.add('now');
            actual.nextElementSibling.classList.remove('after');
        }else{
            actual.previousElementSibling.classList.add('now');
            actual.previousElementSibling.classList.remove('after');
        }

        actual.remove();
    }

    var varDatosImagen = new FormData();
    varDatosImagen.append('urlAEliminar', url);
    varDatosImagen.append('fechaCreacionEliminar', fechaCreacion);
    
    fetch('php/api-upload-image.php', {
        method: "POST",
        body: varDatosImagen,
    });
}

function fullview() {
    console.log(this);
}