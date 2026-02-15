<?php
session_start();
include("../../includes/conexion.php");

if (!isset($_SESSION['idEstudiante'])) {
    header("Location: ../../auth/login.html");
    exit();
}

$idEstudiante = $_SESSION['idEstudiante'];
$idExamen = 7;
$correctas = 0;
$total_preguntas = 0;

// 🔹 Recorremos todas las respuestas enviadas
foreach ($_POST as $key => $idRespuestas) {
    if (strpos($key, "pregunta_") === 0) {
        $sql = "SELECT es_correcta FROM Respuestas WHERE idRespuestas = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $idRespuestas);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($row = $result->fetch_assoc()) {
            if ($row['es_correcta'] == 1) {
                $correctas++;
            }
        }
        $total_preguntas++;
    }
}

$calificacion = round(($correctas / $total_preguntas) * 100);
$estado = ($calificacion >= 70) ? 'aprobado' : 'reprobado';

// 🔹 Guardar o actualizar el resultado
$sql_check = "SELECT * FROM Examenes_estudiante WHERE idEstudiante = ? AND idExamen = ?";
$stmt_check = $conn->prepare($sql_check);
$stmt_check->bind_param("ii", $idEstudiante, $idExamen);
$stmt_check->execute();
$result_check = $stmt_check->get_result();

if ($result_check->num_rows > 0) {
    $sql_update = "UPDATE Examenes_estudiante 
                   SET calificacion = ?, fecha_realizado = NOW(), intentos = intentos + 1, estado = ?
                   WHERE idEstudiante = ? AND idExamen = ?";
    $stmt_update = $conn->prepare($sql_update);
    $stmt_update->bind_param("isii", $calificacion, $estado, $idEstudiante, $idExamen);
    $stmt_update->execute();
} else {
    $sql_insert = "INSERT INTO Examenes_estudiante (idEstudiante, idExamen, calificacion, estado)
                   VALUES (?, ?, ?, ?)";
    $stmt_insert = $conn->prepare($sql_insert);
    $stmt_insert->bind_param("iiis", $idEstudiante, $idExamen, $calificacion, $estado);
    $stmt_insert->execute();
}

// 🔹 Mostrar resultado


echo "<script>alert('Resultado del examen'); </script>";
echo "<script>alert('Preguntas correctas: $correctas de $total_preguntas');</script>";
echo "<script>alert('Calificación final: $calificacion%');</script>";
// 4️⃣ Desbloquear siguiente módulo si aprueba
if ($estado == 'aprobado') {
    // 🟢 Guardar el progreso del estudiante (puedes usar una tabla 'progreso_modulos')
    $sql_progreso = "INSERT INTO Progresos_modulo (idEstudiante, idModulo, estado, fecha_desbloqueo)
                     VALUES (?, ?, 'desbloqueado', NOW())
                     ON DUPLICATE KEY UPDATE estado='desbloqueado', fecha_desbloqueo=NOW()";
    $stmt_prog = $conn->prepare($sql_progreso);
    $siguiente_modulo = 8; // El módulo que se desbloquea
    $stmt_prog->bind_param("ii", $idEstudiante, $siguiente_modulo);
    $stmt_prog->execute();

    echo "<script>
        alert('¡Excelente! Has desbloqueado el siguiente módulo 🎉');
        window.location.href = 'resultados_7.php';
    </script>";
} else {
    echo "<script>
        alert('Tu calificación es menor a 70%. Debes volver a realizar el examen antes de continuar.');
        window.location.href='resultados_7.php';
    </script>";
}
$conn->close();
?>