
let formulario = document.querySelector("form");

formulario.addEventListener("submit", envio);

function envio(evento){

    // Variables con las entradas del formulario
    let mail = document.getElementById("mail").value;
    let nombre = document.getElementById("nombre").value;
    let inicial = document.getElementById("notaInicial").value;
    let primera = document.getElementById("nota1").value;
    let segunda = document.getElementById("nota2").value;
    let tercera = document.getElementById("nota3").value;

    // Variable para cancelar el envio
    let valido = true;

    // Comprobación de mail válido
    let patronMail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if(!pratronMail.test(mail)){
        alert("Email invalido");
        valido = false
    }

    // Comprobación de nombre válido
    if(nombre.trim() == ""){
        alert("Nombre invalido");
        valido = false
    }

    // Comprobación de notas
    let notas = [inicial,primera,segunda,tercera];
    let valida = comprobarNotas(notas);

    if(!valido){
        evento.preventDefault();
    }

    function comprobarNotas(notas){
        let valida = false;
        for(let nota of notas){
            if(isNaN(nota) ||  nota < 1 || nota > 10){
                alert("Alguna nota introducida es invalida");
                valido = false;
                valida = false;
                break;
            }else{
                valida = true;
            }
        }
        return valida;
    }
}

