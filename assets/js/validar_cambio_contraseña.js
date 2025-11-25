document.getElementById("recuperar_contraseña").addEventListener("submit", function(event) {
    let mensajeError = document.getElementById("mensajeError");

    let usuario = document.getElementById("usuario").value.trim();
    let password = document.getElementById("password").value.trim();
    let password2 = document.getElementById("password2").value.trim();

    // Función para mostrar errores
    function mostrarError(msg) {
        event.preventDefault();
        alert(msg);                 // Muestra alerta
        mensajeError.textContent = msg; // Y también lo imprime en pantalla
    }

    if (usuario === "") {
        mostrarError('El usuario es obligatorio.');
        return;
    }

    if (password === "") {
        mostrarError('La contraseña es obligatoria.');
        return;
    }

    if (password.length < 6) {
        mostrarError('La contraseña debe tener al menos 6 caracteres.');
        return;
    }

    if (password2 === "") {
        mostrarError('Confirme la contraseña.');
        return;
    }

    if (password2.length < 6) {
        mostrarError('La confirmación debe tener al menos 6 caracteres.');
        return;
    }

    if (password !== password2) {
        mostrarError('Las contraseñas no coinciden.');
        return;
    }

    mensajeError.textContent = "";
});
