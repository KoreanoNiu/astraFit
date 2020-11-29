const seleccionarFotoPerfil = document.querySelector('#seleccionarFotoPerfil');

const fotoProfileCoach = document.querySelector('#PhotoProfileCoach');

var buttonSend = document.querySelector('.buttonLabel');
buttonSend.addEventListener('click', registrarCoach);
seleccionarFotoPerfil.addEventListener('click', abrirFoto);

fotoProfileCoach.addEventListener('change', perspectivaFoto);

function abrirFoto() {
    fotoProfileCoach.click();
}

function perspectivaFoto(){
    var reader = new FileReader();
    reader.readAsDataURL(this.files[0]);
    reader.onloadend = function () {
        document.getElementById("vistaPrevia").src = reader.result;
    }

}

function registrarCoach(){
    var datosFormularioRegistro = document.getElementById('registerCoachForm').querySelectorAll('input[type="text"], input[type="password"], textarea');

    if (validarDatos(datosFormularioRegistro)) {
        var data = new FormData(document.getElementById('registerCoachForm'));
        console.log(data.get('photo-coach'));

        fetch('php/api-register-coaches.php', {
            method: "POST",
            body: data,
            "Content-Type": "application/json"
        }).then(response => response.json()).then(data => {obj = data
            console.log(data);
        });
    }
}

function validarDatos(array){
    var errorCount = 0;
    array.forEach(input => {
        if (input.value == ""){
            input.style.borderColor = "red";
            errorCount++;
        }else{
            input.style.borderColor = "#126fbb";

            if(input.name == 'email') {
                if (!validarEmail(input.value)) {
                    input.style.borderColor = "red";
                    errorCount++;
                }
            }
        }
    });
    if (errorCount == 0){
        return true;
    }else{
        return false;
    }
}

function validarEmail(email){
    if(/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(email)){
        return true;
    }else{
        return false;
    }
}