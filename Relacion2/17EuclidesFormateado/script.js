let formulario = document.querySelector("form");
    formulario.addEventListener("submit", envio);

    function envio(evento){
        
        let num1 = parseInt(document.getElementById("num1").value);
        let num2 = parseInt(document.getElementById("num2").value);

        let checkCociente = document.querySelector('input[name="cociente"]:checked');
        let checkResto = document.querySelector('input[name="resto"]:checked');

        let formularioValido = true;

        if(isNaN(num1) || !Number.isInteger(num1) || num1 < 0){
            formularioValido = false;
            alert("Número invalido");
        }

        if(isNaN(num2) || !Number.isInteger(num2) || num2 < 0){
            formularioValido = false;
            alert("Número invalido");
        }

        if(checkCociente === null && checkResto === null){
            alert("Elige una opción");
            formularioValido = false;
        }

        if(!formularioValido){
            evento.preventDefault()
        }
    }