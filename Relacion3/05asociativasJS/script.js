
let formulario = document.querySelector("form");

formulario.addEventListener("submit", envio);

// Mostrar u ocultar para el TIE
let tipoIdentificacion = document.getElementById("identificacion");
let contenedorSoporte = document.getElementById("contenedorSoporte");

function mostrarSoporte() {
    if (tipoIdentificacion.value === "tie") {
        contenedorSoporte.classList.remove("d-none");
    } else {
        contenedorSoporte.classList.add("d-none");
    }
}

tipoIdentificacion.addEventListener("change", mostrarSoporte);

// Comprobar también al cargar la página
mostrarSoporte();

function envio(evento){

    // Variables con las entradas del formulario
    let mail = document.getElementById("mail").value;
    let nombre = document.getElementById("nombre").value;
    let inicial = document.getElementById("notaInicial").value;
    let primera = document.getElementById("nota1").value;
    let segunda = document.getElementById("nota2").value;
    let tercera = document.getElementById("nota3").value;
    let identificacionCadena = document.getElementById("identificacion").value;
    let valorIdentificacion = document.getElementById("valorIdentificacion").value;

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
    let notas = [inicial,primera,segunda,tercera];
    let valida = comprobarNotas(notas);

    // Comprobación de identificación
    if(!comprobarIdentifiacion(identificacionCadena,valorIdentificacion)){
        valido = false;
    }

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

    function comprobarIdentifiacion(idCadena, idValor){
        let idValido = true;
        let identificadores = ["dni","nie","tie"];

        if(idCadena != identificadores[0] &&  idCadena != identificadores[1] && idCadena != identificadores[2]){
            idValido = false;
        }else{
            if(typeof(idValor) !== "string" || idValor.trim().length === 0 ){
                idValido = false;
            }else{
                if(idCadena == "dni"){
                    idValido = comprobarDni(idValor);
                }else if(idCadena == "nie"){
                    idValido = comprobarNie(idValor);
                }else{
                    let numeroSoporte = document.getElementById("numeroSoporte").value;
                    idValido = comprobarTie(idValor,numeroSoporte);
                }
            }
        }

        return idValido;
    }

    function comprobarDni(dniCadena){

        let dniValido = true;
        // Dni no tiene 9 caracteres
        if(dniCadena.length !=9){
            dniValido = false
        // Dni tiene 9 caracteres
        }else{
            // Letras DNI
            let letrasDni = [
                "T", "R", "W", "A", "G", "M", "Y", "F",
                "P", "D", "X", "B", "N", "J", "Z", "S",
                "Q", "V", "H", "L", "C", "K", "E"
            ];

            // RegEx DNI los 8 primeros valores son números
            let cadenaValida = /^[0-9]{8}$/;
            // Si es correcto 
            if(cadenaValida.test(dniCadena.substring(0,8))){
                // Números DNI
                let numsDni = parseInt(dniCadena.substring(0,8));
                // Letra del DNI
                let letra = dniCadena.substring(8);

                if(letra.toUpperCase() != letrasDni[numsDni % 23]){
                    dniValido = false;
                }
            }else{
                dniValido = false;
            }
        }

        return dniValido;
    }

    function comprobarNie(nieCadena){
        let nieValido = true;

        // Letra inicial NIE
        let letraInicialNie = [
            "X","Y","Z"
        ];

        if(nieCadena.length !=9){
            nieValido = false
        // Dni tiene 9 caracteres
        }else{
            if(nieCadena[0].toUpperCase() != letraInicialNie[0] && nieCadena[0].toUpperCase() != letraInicialNie[1] && nieCadena[0].toUpperCase() != letraInicialNie[2]){
                nieValido = false;
            }else{
                if(nieCadena[0].toUpperCase() == "X"){
                    nieCadena = `0${nieCadena.substring(1,9)}`;
                }else if(nieCadena[0].toUpperCase() == "Y"){
                    nieCadena = `1${nieCadena.substring(1,9)}`;
                }else{
                    nieCadena = `2${nieCadena.substring(1,9)}`;
                }
                nieValido = comprobarDni(nieCadena);
            }
        }
        return nieValido;
    }

    function comprobarTie(nieCadena, numeroSoporte) {
        let tieValido = true;

        if (!comprobarNie(nieCadena)) {
            tieValido = false;
        }

        let patronSoporte = /^E[0-9]{8}$/i;

        if (!patronSoporte.test(numeroSoporte)) {
            tieValido = false;
        }

        return tieValido;
    }

}

