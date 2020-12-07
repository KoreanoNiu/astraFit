const changeProfilePhoto = document.querySelector('#changeProfilePhoto');

const fotoProfile = document.querySelector('#fotoPerfil');

changeProfilePhoto.addEventListener('click', abrirFoto);

fotoProfile.addEventListener('change', cambiarFotoPerfil);

function abrirFoto() {
    fotoProfile.click();
}

function cambiarFotoPerfil(){
    // console.log(this.files.length);
    // console.log(Math.round((this.files.item(0).size / 1024)));
    if (this.files.length > 0){
        if(Math.round((this.files.item(0).size / 1024)) < 8192){
            if(this.files.item(0).type == 'image/jpeg' || this.files.item(0).type == 'image/png'){
        
                var date = new Date();
                date = date.getHours() + ":" + date.getMinutes() + " " + date.getDay() + "/" + (date.getMonth() +1) + "/" + date.getFullYear();
                // console.log(date);
                var datos = new FormData(document.getElementById('ProfilePhotoForm'));
                datos.append("fechaCreacion", date);
                
                fetch('php/api-change-profile-photo.php', {
                    method: "POST",
                    body: datos,
                }).then(response => response.json()).then(data => {obj = data
                    document.querySelector('.img-perfil').src = obj['srcFotoPerfil'].slice(3, 50);
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
