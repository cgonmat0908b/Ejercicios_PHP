
let formulario = document.querySelector("form");

formulario.addEventListener("submit", envio);

function envio(evento){

    // Variables con las entradas del formulario
    let mail = document.getElementById("mail").value;
    let nombre = document.getElementById("nombre").value;
    let nota = document.getElementById("notaNumerica").value;

    // Variable para cancelar el envio
    let valido = true;

    // Comprobación de mail válido
    let patronMail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if(!patronMail.test(mail)){
        alert("Email invalido");
        valido = false
    }

    // Comprobación de nombre válido
    if(nombre.trim() == ""){
        alert("Nombre invalido");
        valido = false
    }

    // Comprobación de notas
    let valida = comprobarNotas(nota);

    if(!valido){
        evento.preventDefault();
    }

    function comprobarNotas(nota){
        let valida = false;
        if(isNaN(nota) ||  nota < 1 || nota > 10){
            alert("Nota introducida invalida");
            valido = false;
            valida = false;
        }else{
            valida = true;
        }
        return valida;
    }

}

