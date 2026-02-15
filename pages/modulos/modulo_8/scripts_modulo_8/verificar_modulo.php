<?php
session_start();
include("../../../includes/conexion.php");

// Verifica que el estudiante haya iniciado sesión
if (!isset($_SESSION['idEstudiante'])) {
    header("Location: ../../../auth/login.html");
    exit();
}

$idEstudiante = $_SESSION['idEstudiante'];
$id_modulo_actual = 8; // Módulo que el estudiante intenta abrir
$id_modulo_anterior = $id_modulo_actual - 1;

// Verificar si aprobó el examen del módulo anterior
$sql = "SELECT calificacion, estado 
        FROM Examenes_estudiante 
        WHERE idEstudiante = ? AND idExamen = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $idEstudiante, $id_modulo_anterior);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
    if ($row['calificacion'] <= 69 || $row['estado'] != 'aprobado') {
        echo "<script>
            alert('⚠️ No puedes acceder a este módulo hasta aprobar el anterior.');
            window.location.href = '../../../auth/dashboard.php';
        </script>";
        exit();
    }
} else {
    echo "<script>
        alert('Debes completar el examen del módulo anterior antes de continuar.');
        window.location.href = '../../../auth/dashboard.php';
    </script>";
    exit();
}
?>
