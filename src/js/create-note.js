const createNote = document.getElementById("createNote");
let inputs = document.querySelectorAll('input, textarea');

inputs.forEach(input => {
    input.addEventListener('change', funcionInputs);
});

console.log(inputs);

createNote.onclick = function (){
    const noteForm = new FormData(document.getElementById("create-note-form"));
    if (validarDatos(noteForm)) {
        console.log("No esta vacio");
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
                                        <label for="">Titulo</label>
                                        <input type="text" value=${obj['titulo']}>
                                        <Label>Descripcion</Label>
                                        <input type="text" value=${obj['descripcion']}>
                                        <label for="">Contenido</label>
                                        <textarea name="Contenido" id="Contenidos" value=${obj['contenido']}>${obj['contenido']}</textarea>
                                        <a id="createNote" class="strava-login" id="eliminarNota" style="background-color: #126fbb" onclick=(eliminarNota(this))>Eliminar nota</a>
                                    </form>
                                `;
                document.querySelector(".notes").appendChild(note);
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

function eliminarNota(e) {
    console.log(e);
    let dataNote = new FormData();

    dataNote.append('idNota', e.getAttribute('id').slice(10));
    dataNote.append('peticion', 'eliminarNota');

    console.log(dataNote.get('idNota'));

    fetch('php/create-note-api.php', {
        method: "POST",
        body: dataNote,
        "Content-Type": "application/json"
    });

    e.parentNode.remove();
}

function funcionInputs() {
    if (this.parentNode.getAttribute('id') != 'id') {
        let dataNote = new FormData();
        dataNote.append('idNota', this.parentNode.getAttribute('id').slice(10));
        dataNote.append('peticion', 'editarElemento');
        dataNote.append(`${this.name}`, this.value);
        dataNote.append('nombre', this.name);

        fetch('php/create-note-api.php', {
            method: "POST",
            body: dataNote,
            "Content-Type": "application/json"
        })   
    }
}