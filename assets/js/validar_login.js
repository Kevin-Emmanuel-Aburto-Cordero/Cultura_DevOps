document.getElementById("iniciar_sesion").addEventListener("submit", function(event){
    let mensajeError = document.getElementById("mensajeError");

    let usuario = document.getElementById("usuario").value.trim();
    let contraseña = document.getElementById("contraseña").value.trim();

    if(usuario === ""){
        event.preventDefault();
        mensajeError.textContent = alert('El usuario es obligatorio.');
        return;
    }

    if(contraseña === ""){
        event.preventDefault();
        mensajeError.textContent = alert('La contraseña es obligatoria.');
        return;
    }

    if(contraseña.length < 6){
        event.preventDefault();
        mensajeError.textContent = alert('La contraseña debe tener al menos 6 caracteres.');
        return;
    }

    mensajeError.textContent = "";
});