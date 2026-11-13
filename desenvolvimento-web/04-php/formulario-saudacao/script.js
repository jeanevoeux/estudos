const formulario = document.getElementById("formulario");
const modal = document.getElementById("modal");
const cancelar = document.getElementById("cancelar");
const confirmar = document.getElementById("confirmar");

formulario.addEventListener("submit", function(event) {
    event.preventDefault();

    if (formulario.checkValidity()) {
        modal.style.display = "flex";
    } else {
        formulario.reportValidity();
    }
});

cancelar.addEventListener("click", function() {
    modal.style.display = "none";
});

confirmar.addEventListener("click", function() {
    formulario.submit();
});