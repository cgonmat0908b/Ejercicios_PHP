let formulario = document.querySelector("form");
    formulario.addEventListener("submit", envio);

    function envio(evento){
        
        let num = parseInt(document.getElementById("num").value);
        let radio = document.querySelector('input[name="operacion"]:checked');
        let formularioValido = true;

        if(isNaN(num) || !Number.isInteger(num) || num < 1){
            formularioValido = false;
            alert("Número invalido");
        }

        if(radio === null){
            alert("Elige una opción");
            formularioValido = false;
        }

        if(!formularioValido){
            evento.preventDefault()
        }
    }