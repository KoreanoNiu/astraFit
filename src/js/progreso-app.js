var inputs = document.querySelectorAll('input[type="text"],input[type="number"]');

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
            body: data
        }).then(response => response.json()).then(data => {obj = data
            console.log(data);
        });    
    }else{
        //console.log('algo ocurrio');
    }
    //console.log(error);
    //console.log(data.get(`${this.name}`));
}

function validarDatos(e){
    if(e.name == 'Altura'){
        if(e.value < 200 && e.value > 120) {
            e.style.borderColor = "#126fbb";
            calcularIMC();
            return true;
        }else{
            e.style.borderColor = "red";
            return false;
        }
    }
    if(e.name == 'Peso'){
        if(e.value > 30 && e.value < 150){
            e.style.borderColor = "#126fbb";
            calcularIMC();
            return true;
        }else{
            e.style.borderColor = "red";
            return false;
        }
    }
    if(e.name == 'Edad'){
        if(e.value > 10 && e.value < 90){
            e.style.borderColor = "#126fbb";
            return true;
        }else{
            e.style.borderColor = "red";
            return false;
        }
    }
}

function calcularIMC(){
    var altura = document.getElementsByName('Altura');
    var peso = document.getElementsByName('Peso');

    var IMC = peso[0].value / (altura[0].value / 100 * altura[0].value / 100);
    document.getElementsByName('IMC')[0].value = IMC.toFixed(2);
}
