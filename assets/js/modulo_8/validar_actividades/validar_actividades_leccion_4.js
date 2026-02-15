document.getElementById("validar_actividad").addEventListener("submit", function(event){
    let mensajeError = document.getElementById("mensajeError");
    let preguntas = ["pregunta_1", "pregunta_2", "pregunta_3", "pregunta_4", "pregunta_5"];
    let todasRespondidas = true;

    for(let nombre of preguntas){
        if(!document.querySelector(`input[name="${nombre}"]:checked`)){
            todasRespondidas = false;
            break;
        }
    }

    if(!todasRespondidas){
        event.preventDefault();
        mensajeError.textContent = alert('Por favor, responde todas las preguntas antes de continuar.');
    }else{
        mensajeError.textContent = "";
    }
});