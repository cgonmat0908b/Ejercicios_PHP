let formulario = document.querySelector("form");

formulario.addEventListener("submit", envio);

function envio(evento){
    let mayus = document.getElementById("mayus");
    let minus = document.getElementById("minus");

    let valido = true;

    if(mayus.checked && minus.checked){
        valido = false
    }else if(!mayus.checked && !minus.checked){
        valido = false
    }

    if(!valido){
        evento.preventDefault();
    }
}