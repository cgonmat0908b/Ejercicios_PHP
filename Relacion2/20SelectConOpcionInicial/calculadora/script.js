const formulario = document.querySelector("form");

formulario.addEventListener("submit", (evento) => {
    const form = evento.currentTarget;
    const a = Number(form.elements.num1.value);
    const b = Number(form.elements.num2.value);

    if (form.elements.num1.value.trim() === "" || !Number.isFinite(a) || form.elements.num2.value.trim() === "" || !Number.isFinite(b)) {
        evento.preventDefault();
        alert("Introduce dos números válidos.");
    } else if (form.elements.operador.value === "") {
        evento.preventDefault();
        alert("Selecciona una operación.");
    }
});
