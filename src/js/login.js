var buttonSend = document.querySelector('.buttonLabel');
buttonSend.addEventListener('click', iniciarSesion);

function iniciarSesion(){
    var datosFormularioLogin = document.getElementById('loginForm').querySelectorAll('input');

    datosFormularioLogin.forEach(dato => {
        if (dato.value === ""){
            dato.style.borderColor = "red";
        }else{
            dato.style.borderColor = "#126fbb";
        }
    });

    if(validarEmail(datosFormularioLogin[0].value)){
        if(datosFormularioLogin[0].value != "" && datosFormularioLogin[1].value != ""){
            
            var formularioFinal = new FormData(document.getElementById('loginForm'));

            fetch('php/api-login.php', {
                method: "POST",
                body: formularioFinal,
            }).then(response => response.json()).then(data => {obj = data
                if (obj['error'] != ''){
                    msgError = document.createElement('div');
                    msgError.classList.add('error-msg');
                    msgError.innerHTML = `
                                            <div class="msg-container">
                                                <div class="msg">
                                                    <h2>${obj['error']}</h2>
                                                </div>
                                                <div class="button-error-msg" onclick="this.parentNode.parentNode.remove();">
                                                    <label for="button-error-msg">Aceptar</label>
                                                </div>
                                            </div>`;
                    document.body.appendChild(msgError);
                }else{
                    document.querySelector('.form-container').style.backgroundImage = "url('./src/img/background-login.jpg')";
                    this.parentNode.parentNode.parentNode.classList.toggle('hide');
                    this.parentNode.parentNode.parentNode.nextElementSibling.classList.toggle('hide');
                    document.querySelector('.status-bar').style.marginTop = "15rem";
                    document.querySelector('.status-bar').querySelector('div').style.width = null;
                    document.querySelector('.status-bar').querySelector('div').classList.add('loading-bar-login');

                    setTimeout(function(){
                        window.location.replace("/astraFit/miprogreso.php");
                    }, 5000);
                }
            });
        }
    }else{
        datosFormularioLogin[0].style.borderColor = "red";
    }
}

function validarEmail(email){
    if(/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(email)){
        return true;
    }else{
        return false;
    }
}