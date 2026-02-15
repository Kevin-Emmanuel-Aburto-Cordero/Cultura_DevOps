document.getElementById("btnActividad2").addEventListener("click", () => {
    fetch("../../../pages/modulos/modulo_2/scripts_modulo_2/verificar_actividad.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: 'idActividad=7'
    })//json o text
    .then(res => res.json())
    .then(data => {
        alert(data.mensaje);
        //alert("Respuesta: ". text);

        if (data.status === "ok") {
            // ✅ Redirige si tiene permiso
            window.location.href = '../../../pages/modulos/modulo_2/leccion_2.php';
        }
    })
    .catch(error =>{
        alert('⚠️ Ocurrió un error al verificar el progreso.');
        console.error(error);
    });
});