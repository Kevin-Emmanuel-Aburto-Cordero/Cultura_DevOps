document.getElementById("btnExamen").addEventListener("click", () => {
    fetch("../../../pages/modulos/modulo_5/scripts_modulo_5/verificar_progreso_modulo_5.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: 'idModulo=5'
    })//json o text
    .then(res => res.json())
    .then(data => {
        alert(data.mensaje);
        //alert("Respuesta: ". text);

        if (data.status === "ok") {
            // ✅ Redirige si tiene permiso
            window.location.href = '../../../pages/modulos/modulo_5/panel_de_estudio_5.html';
        }
    })
    .catch(error =>{
        alert('⚠️ Ocurrió un error al verificar el progreso.');
        console.error(error);
    });
});