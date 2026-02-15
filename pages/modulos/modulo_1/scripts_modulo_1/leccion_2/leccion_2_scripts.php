<?php
include('../../../includes/conexion.php');

// Verificamos que haya sesión activa
if (!isset($_SESSION['idEstudiante'])) {
    echo "⚠️ Debes iniciar sesión.";
    exit();
}

$idEstudiante = $_SESSION['idEstudiante'];

// 🔹 Traemos datos del módulo, actividad y estado del estudiante
$sql = "SELECT 
            m.nombre_modulo, 
            m.idModulo, 
            a.idActividad, 
            a.titulo_actividad,
            ae.estado,
            ae.calificacion
        FROM Actividades a
        INNER JOIN Modulo m ON a.idModulo = m.idModulo
        LEFT JOIN Actividades_estudiante ae 
            ON a.idActividad = ae.idActividad AND ae.idEstudiante = ?
        WHERE a.idActividad = 2";

$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Error en la preparación de la consulta: " . $conn->error);
}

$stmt->bind_param("i", $idEstudiante);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<h1>Modulo: ' . htmlspecialchars($row['nombre_modulo']) . '</h1>';
        echo 'Código de unidad: ' . htmlspecialchars($row['idModulo']) . '<br>';
        echo 'Código de actividad: ' . htmlspecialchars($row['idActividad']) . '<br>';
        echo 'Nombre de la actividad: ' . htmlspecialchars($row['titulo_actividad']) . '<br>';
        
        // Solo si el estudiante tiene registro en la tabla Actividades_estudiante
        if (!empty($row['estado'])) {
            echo 'Estado: ' . htmlspecialchars($row['estado']) . '<br>';
            echo 'Calificación: ' . htmlspecialchars($row['calificacion']) . '<br>';
        } else {
            echo 'Estado: No iniciado<br>';
        }
    }
} else {
    echo "Datos no encontrados.";
}

$stmt->close();
$conn->close();
?>
