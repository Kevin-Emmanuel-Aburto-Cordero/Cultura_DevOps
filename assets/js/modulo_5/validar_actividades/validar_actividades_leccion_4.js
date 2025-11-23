document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("actividad");
    const mensajeError = document.getElementById("mensajeError");

    form.addEventListener("submit", function (event) {
        const r1 = document.getElementById("r1").value;
        const r2 = document.getElementById("r2").value;
        const r3 = document.getElementById("r3").value;
        const r4 = document.getElementById("r4").value;

        if (r1 === "" || r2 === "" || r3 === "" || r4 === "") {
            event.preventDefault(); // Detiene envío
            mensajeError.textContent = alert('⚠️ Debes completar todas las parejas antes de continuar.');
        } else {
            mensajeError.textContent = "";
        }
    });
});
