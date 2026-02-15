document.getElementById("btnActividad3").addEventListener("click", () => {
    fetch("../../../pages/modulos/modulo_4/scripts_modulo_4/verificar_actividad.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: 'idActividad=19'
    })//json o text
    .then(res => res.json())
    .then(data => {
        alert(data.mensaje);
        //alert("Respuesta: ". text);

        if (data.status === "ok") {
            // ✅ Redirige si tiene permiso
            window.location.href = '../../../pages/modulos/modulo_4/leccion_3.php';
        }
    })
    .catch(error =>{
        alert('⚠️ Ocurrió un error al verificar el progreso.');
        console.error(error);
    });
});