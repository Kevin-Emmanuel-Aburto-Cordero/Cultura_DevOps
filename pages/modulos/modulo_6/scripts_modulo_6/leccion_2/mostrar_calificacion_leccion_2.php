<?php
include('../../../includes/conexion.php');

// Verificamos que haya sesión activa
if (!isset($_SESSION['idEstudiante'])) {
    echo "⚠️ Debes iniciar sesión.";
    exit();
}

$idEstudiante = $_SESSION['idEstudiante'];

// ✅ Filtro tanto por actividad como por estudiante
$sql = "SELECT calificacion 
        FROM Actividades_estudiante 
        WHERE idActividad = 28 AND idEstudiante = ?";

$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Error en la preparación de la consulta: " . $conn->error);
}

$stmt->bind_param("i", $idEstudiante);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo htmlspecialchars($row['calificacion']);
} else {
    echo "Calificación no asignada";
}

$stmt->close();
$conn->close();
?>
