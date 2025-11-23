document.getElementById("recuperar_contraseña").addEventListener("submit", function(event){
    let mensajeError=document.getElementById("mensajeError");

    let usuario=document.getElementById("usuario").value.trim();
    let password=document.getElementById("password").value.trim();
    let password2=document.getElementById("password2").value.trim();

    if(usuario===""){
        event.preventDefault();
        mensajeError.textContent=alert('El usuario es obligatorio.');
        return;
    }

    if(password===""){
        event.preventDefault();
        mensajeError.textContent=alert('La contraseña es obligatoria.');
        return;
    }

    if(password.length<6){
        event.preventDefault();
        mensajeError.textContent=alert('La contraseña debe tener al menos 6 caracteres.');
        return;
    }

    if(password2===""){
        event.preventDefault();
        mensajeError.textContent= alert('Confirme la contraseña');
        return;
    }

    if(password2.length<6){
        event.preventDefault();
        mensajeError.textContent=alert('La contraseña debe tener al menos 6 caracteres.');
        exit;
    }

    mensajeError.textContent="";
});