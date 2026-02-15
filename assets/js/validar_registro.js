document.getElementById("registro").addEventListener("submit", function(event) {
    let mensajeError = document.getElementById("mensajeError");

    let usuario = document.getElementById("usuario").value.trim();
    let contraseña = document.getElementById("contraseña").value.trim();
    let nombre_universidad = document.getElementById("nombre_universidad").value.trim();
    let pais = document.getElementById("pais").value.trim();
    let estado = document.getElementById("estado").value.trim();

    // Limpiar mensaje previo
    mensajeError.textContent = "";

    // Validar usuario
    if (usuario.length < 4) {
        event.preventDefault();
        mensajeError.textContent = "El usuario debe tener al menos 4 caracteres.";
        return;
    }

    // Validar contraseña vacía
    if (contraseña === "") {
        event.preventDefault();
        mensajeError.textContent = "La contraseña es obligatoria.";
        return;
    }

    // Validar largo de contraseña
    if (contraseña.length < 6) {
        event.preventDefault();
        mensajeError.textContent = "La contraseña debe tener al menos 6 caracteres.";
        return;
    }

    // Validar universidad
    if (nombre_universidad === "") {
        event.preventDefault();
        mensajeError.textContent = "La universidad es obligatoria.";
        return;
    }

    // Validar país
    if (pais === "") {
        event.preventDefault();
        mensajeError.textContent = "El país es obligatorio.";
        return;
    }

    // Validar estado
    if (estado === "") {
        event.preventDefault();
        mensajeError.textContent = "El estado es obligatorio.";
        return;
    }
});
