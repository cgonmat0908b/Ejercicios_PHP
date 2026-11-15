const formulario = document.querySelector("form");

formulario.addEventListener("submit", (evento) => {
    const campo = document.getElementById("decimal");
    const valor = Number(campo.value);

    if (campo.value.trim() === "" || !Number.isSafeInteger(valor) || valor < 0) {
        evento.preventDefault();
        alert("Introduce un número entero mayor o igual que cero.");
    } else if (document.getElementById("base").value === "") {
        evento.preventDefault();
        alert("Selecciona una operación.");
    }
});
