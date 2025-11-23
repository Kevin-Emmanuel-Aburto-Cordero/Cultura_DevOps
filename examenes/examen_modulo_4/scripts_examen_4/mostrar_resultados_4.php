<?php
include('../../includes/conexion.php');

if (!isset($_SESSION['idEstudiante'])) {
    echo "No logueado";
    exit();
}

$idEstudiante = $_SESSION['idEstudiante'];

$sql = "SELECT idExamen ,calificacion, fecha_realizado, intentos, estado FROM Examenes_estudiante WHERE idExamen = 4 AND idEstudiante = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $idEstudiante);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
    echo "<b>Unidad de examen: </b>" . htmlspecialchars($row['idExamen']);
    echo "<br>";
    echo "<b>Calificacion: </b>" . htmlspecialchars($row['calificacion']);
    echo "<br>";
    echo "<b>Fecha realizada del examen: </b>" . htmlspecialchars($row['fecha_realizado']); 
    echo "<br>";
    echo "<b>Numero de intentos: </b>" . htmlspecialchars($row['intentos']);
    echo "<br>";
    echo "<b>Estatus: </b>" . htmlspecialchars($row['estado']);
    echo "<br>";
} else {
    echo "Datos no encontrados";
}
?>