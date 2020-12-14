function enviarFormulario() {
    dataForm = new FormData(document.querySelector('.contact-container'));
    if (dataForm.get('nombre') !== '' && dataForm.get('telefono') !== '' && dataForm.get('email') !== '' && dataForm.get('mensaje') !== '' && validarEmail(dataForm.get('email'))) {
      fetch('php/send-contact-api.php', {
        method: "POST",
        body: dataForm,
        "Content-Type": "application/json"
      }).then(response => response.json()).then(data => {
        obj = data;
        if(obj['error'] == ''){
          p = document.createElement('p');
          p.innerHTML = 'Correo enviado con éxito, nos contactaremos lo más pronto posible :)'
          document.querySelector('.contact-container').appendChild(p);
          inputs = document.querySelectorAll('input, textarea');
          inputs.forEach(input => {
            input.value = '';
            input.innerHTML = '';
          });
        }
        console.log(data);
      });    
    }
}    

function validarEmail(email){
    if(/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(email)){
        return true;
    }else{
        return false;
    }
  }
