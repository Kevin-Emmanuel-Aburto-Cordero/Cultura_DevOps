document.getElementById("btnExamen").addEventListener("click", () => {
    fetch("../../../pages/modulos/modulo_1/scripts_modulo_1/verificar_progreso_modulo_1.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: 'idModulo=1'
    })//json o text
    .then(res => res.json())
    .then(data => {
        alert(data.mensaje);
        //alert("Respuesta: ". text);

        if (data.status === "ok") {
            // ✅ Redirige si tiene permiso
            window.location.href = '../../../pages/modulos/modulo_1/panel_de_estudio_1.html';
        }
    })
    .catch(error =>{
        alert('⚠️ Ocurrió un error al verificar el progreso.');
        console.error(error);
    });
});