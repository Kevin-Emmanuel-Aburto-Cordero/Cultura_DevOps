document.addEventListener("DOMContentLoaded", function () { /*DOMContentLoaded*/
    const form = document.getElementById("form_examen");

    form.addEventListener("submit", function (event) {
        const preguntas = document.querySelectorAll("[name^='pregunta_']");
        const nombresPreguntas = new Set();

        // Recolectamos los nombres de cada grupo de radio
        preguntas.forEach(input => nombresPreguntas.add(input.name));

        let todasRespondidas = true;

        // Verificamos si cada grupo tiene una opción seleccionada
        nombresPreguntas.forEach(nombre => {
            const seleccion = document.querySelector(`input[name="${nombre}"]:checked`);
            if (!seleccion) {
                todasRespondidas = false;
            }
        });

        // Si falta una pregunta sin responder
        if (!todasRespondidas) {
            event.preventDefault(); // Detiene el envío del formulario
            alert("⚠️ Debes responder todas las preguntas antes de enviar el examen.");
        }
    });
});
