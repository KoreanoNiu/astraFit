const abrirFile = document.querySelector('.photoInput');
const addNewPhoto = document.querySelector('#addNewPhoto');
const foto = document.querySelector('#Foto');

abrirFile.addEventListener('click', abrirFoto);
addNewPhoto.addEventListener('click', abrirFoto);

foto.addEventListener('change', subirFoto);

function abrirFoto() {
    foto.click();
}

function subirFoto(){
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
        img.classList.add('img-Actual');

        document.querySelector('.formPhoto').insertBefore(img, document.getElementById('frmImage'));
        document.getElementById('frmImage').classList.add('hide');
    });
}
