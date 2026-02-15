document.getElementById("btnExamen").addEventListener("click", () => {
    fetch("../../../pages/modulos/modulo_7/scripts_modulo_7/verificar_progreso_modulo_7.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: 'idModulo=7'
    })//json o text
    .then(res => res.json())
    .then(data => {
        alert(data.mensaje);
        //alert("Respuesta: ". text);

        if (data.status === "ok") {
            // ✅ Redirige si tiene permiso
            window.location.href = '../../../pages/modulos/modulo_7/panel_de_estudio_7.html';
        }
    })
    .catch(error =>{
        alert('⚠️ Ocurrió un error al verificar el progreso.');
        console.error(error);
    });
});