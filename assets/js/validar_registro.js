document.getElementById("registro").addEventListener("submit", function(event){
    let mensajeError = document.getElementById("mensajeError");

    let usuario = document.getElementById("usuario").value.trim();
    let contraseña = document.getElementById("contraseña").value.trim();
    let nombre_universidad = document.getElementById("nombre_universidad").value.trim();
    let pais = document.getElementById("pais").value.trim();
    let estado = document.getElementById("estado").value.trim();

    if (usuario.length < 4) {
        event.preventDefault();
        mensajeError.textContent = alert('El usuario debe tener al menos 4 caracteres.');
        return;
    }

    if (contraseña === ""){
        event.preventDefault();
        mensajeError.textContent = alert('La contraseña es obligatoria');
    }

    if (contraseña.length < 6) {
        event.preventDefault();
        mensajeError.textContent = alert('La contraseña debe tener al menos 6 caracteres.');
        return;
    }
    if (nombre_universidad === "") {
        event.preventDefault();
        mensajeError.textContent = alert('La universidad es obligatoria.');
        return;
    }
    if (pais === "") {
        event.preventDefault();
        mensajeError.textContent = alert('El país es obligatorio.');
        return;
    }
    if (estado === "") {
        event.preventDefault();
        mensajeError.textContent = alert('El estado es obligatorio.');
        return;
    }

    mensajeError.textContent = "";
});