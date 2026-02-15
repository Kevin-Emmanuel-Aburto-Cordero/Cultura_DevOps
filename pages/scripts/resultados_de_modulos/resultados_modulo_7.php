<?php
include('../includes/conexion.php');

if (!isset($_SESSION['idEstudiante'])) {
    echo "⚠️ Debes iniciar sesión.";
    exit();
}

// 🔹 Recibir módulo desde la URL o asignar uno por defecto
$idEstudiante = $_SESSION['idEstudiante'];
$idModulo = isset($_GET['idModulo']) ? intval($_GET['idModulo']) : 7;

// 🔹 Consulta SQL — centrada solo en un módulo
$sql = "SELECT 
            m.idModulo,
            m.nombre_modulo,
            COUNT(CASE WHEN ae.estado = 'completada' THEN 1 END) AS actividades_completadas,
            COUNT(a.idActividad) AS total_actividades,
            COALESCE(e.estado, 'No realizado') AS estado_examen,
            CASE 
                WHEN COUNT(a.idActividad) = COUNT(CASE WHEN ae.estado = 'completada' THEN 1 END)
                     AND e.estado = 'aprobado' THEN '✅ Completo'
                WHEN e.estado = 'reprobado' THEN '⛔ Examen reprobado'
                ELSE '🕓 En progreso'
            END AS estado_modulo
        FROM Modulo m
        LEFT JOIN Actividades a ON m.idModulo = a.idModulo
        LEFT JOIN Actividades_estudiante ae 
               ON a.idActividad = ae.idActividad AND ae.idEstudiante = ?
        LEFT JOIN Examenes_estudiante e 
               ON e.idExamen = m.idModulo AND e.idEstudiante = ?
        WHERE m.idModulo = ?
        GROUP BY m.idModulo, m.nombre_modulo, e.estado";

$stmt = $conn->prepare($sql);
$stmt->bind_param("iii", $idEstudiante, $idEstudiante, $idModulo);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
    echo "<h3>Progreso del Módulo: {$row['nombre_modulo']}</h3>";
    echo "Actividades completadas: {$row['actividades_completadas']} / {$row['total_actividades']}<br>";
    echo "Estado del examen: {$row['estado_examen']}</br>";
    echo "Estado general del módulo: {$row['estado_modulo']}<br>";
} else {
    echo "⚠️ No se encontró información para este módulo.";
}

$stmt->close();
$conn->close();
?>
