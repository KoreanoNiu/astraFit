var inputs = document.querySelectorAll('input[type="text"],input[type="number"], select');

inputs.forEach(input => {
    input.addEventListener('change', funcionInputs);
});

function funcionInputs(){
    //console.log(this);

    var data = new FormData();    

    if(validarDatos(this)){
        data.append(`${this.name}`, this.value);
        data.append('nombre', this.name);

        fetch('php/api-change-data.php', {
            method: "POST",
            body: data,
            "Content-Type": "application/json"
        }).then(response => response.json()).then(data => {obj = data
            // console.log(data);   
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
            }
            });
    }else{
        //console.log('algo ocurrio');
    }
    //console.log(error);
    //console.log(data.get(`${this.name}`));
}

function validarDatos(e){
    if(e.name == 'Altura'){
        if(e.value < 200 && e.value > 120 && comprobarNoEsNumero(e.value) == false) {
            e.style.borderColor = "#126fbb";
            calcularIMC();
            return true;
        }else{
            e.style.borderColor = "red";
            return false;
        }
    }
    if(e.name == 'Peso'){
        if(e.value > 30 && e.value < 150 && comprobarNoEsNumero(e.value) == false){
            e.style.borderColor = "#126fbb";
            calcularIMC();
            return true;
        }else{
            e.style.borderColor = "red";
            return false;
        }
    }
    if(e.name == 'Edad'){
        if(e.value > 10 && e.value < 90 && comprobarNoEsNumero(e.value) == false){
            e.style.borderColor = "#126fbb";
            return true;
        }else{
            e.style.borderColor = "red";
            return false;
        }
    }if (e.name == 'Nombre'){
        if (comprobarNoEsNumero(e.value) && e.value != '') {
            e.style.borderColor = "#126fbb";
            document.querySelector('.nameUser').innerHTML = e.value;
            return true;
        }else{
            e.style.borderColor = "red";
            return false;
        }
    }if(e.name == 'Objetivo'){
        return true;
    }if(e.name == 'Nivel'){
        return true;
    }if(e.name == 'Lesiones'){
        return true;
    }
}

function calcularIMC(){
    var altura = document.getElementsByName('Altura');
    var peso = document.getElementsByName('Peso');

    var IMC = peso[0].value / (altura[0].value / 100 * altura[0].value / 100);
    document.getElementsByName('IMC')[0].value = truncar(IMC);
}

function truncar(n){
    let t=n.toString();
    let regex=/(\d*.\d{0,2})/;
    return t.match(regex)[0];
}

function comprobarNoEsNumero(n){
    if(/[0-9]/.test(n)){
        return false;
    }else{
        return true;
    }
}