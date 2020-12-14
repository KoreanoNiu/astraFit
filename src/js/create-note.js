const createNote = document.getElementById("createNote");
var inputs = document.querySelectorAll('input, textarea');

refrescarInputs();

createNote.onclick = function (){
    const noteForm = new FormData(document.getElementById("create-note-form"));
    if (validarDatos(noteForm)) {
        noteForm.append('peticion', 'crearNota');
        fetch('php/create-note-api.php', {
            method: "POST",
            body: noteForm,
            "Content-Type": "application/json"
        }).then(response => response.json()).then(data => {obj = data
            console.log(data);
            if (obj['error'] == ''){
                note = document.createElement('div');
                note.classList.add('note');
                note.innerHTML = `
                                    <form id="form-note-${obj['idNota']}" class="form-note" action="">
                                        <label for="Titulo">Titulo</label>
                                        <input type="text" name="Titulo" value="${obj['titulo']}">
                                        <Label for="Descripcion">Descripcion</Label>
                                        <input type="text" name="Descripcion" value="${obj['descripcion']}">
                                        <label for="Contenido">Contenido</label>
                                        <textarea name="Contenido" id="Contenido" value="${obj['contenido']}">${obj['contenido']}</textarea>
                                        <a id="createNote" class="strava-login" id="eliminarNota" style="background-color: #126fbb" onclick=(eliminarNota(this.parentNode))>Eliminar nota <img src="src/img/signo-menos.svg"></a>
                                    </form>
                                `;
                document.querySelector(".notes").appendChild(note);
                document.getElementById("create-note-form").parentNode.style.display = "none";
                
                inputsFormCreate = document.getElementById("create-note-form").querySelectorAll('input, textarea');
                inputsFormCreate.forEach(input => {
                    input.value = '';
                    input.innerHTML = ''; 
                });

                refrescarInputs();
            }
        });
    }
}

function validarDatos (noteForm){
    if (noteForm.get('Titulo') != '' && noteForm.get('Descripcion') != '' && noteForm.get('Contenido') != '') {
        return true;
    }else{
        return false;
    }

}

function refrescarInputs() {
    inputs = document.querySelectorAll('input, textarea');

    inputs.forEach(input => {
        input.addEventListener('change', funcionInputs);
    });

    //console.log(inputs);
}

function eliminarNota(e) {
    //console.log(e);
    let dataNote = new FormData();

    dataNote.append('idNota', e.getAttribute('id').slice(10));
    dataNote.append('peticion', 'eliminarNota');

    fetch('php/create-note-api.php', {
        method: "POST",
        body: dataNote,
        "Content-Type": "application/json"
    });

    e.parentNode.remove();
}

function funcionInputs() {
    //console.log(inputs);

    if (this.parentNode.getAttribute('id') != 'create-note-form') {
        let dataNote = new FormData();
        dataNote.append('idNota', this.parentNode.getAttribute('id').slice(10));
        dataNote.append('peticion', 'editarElemento');
        dataNote.append(`${this.name}`, this.value);
        dataNote.append('nombre', this.name);

        fetch('php/create-note-api.php', {
            method: "POST",
            body: dataNote,
            "Content-Type": "application/json"
        });
    }
}
