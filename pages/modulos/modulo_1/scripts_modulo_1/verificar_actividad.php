<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("../../../../includes/conexion.php");

// Indicamos que la respuesta será JSON
header("Content-Type: application/json");

// 1️⃣ Verificar sesión
if (!isset($_SESSION['idEstudiante'])) {
    echo json_encode([
        "status" => "error",
        "mensaje" => "Debes iniciar sesión para continuar."
    ]);
    exit();
}

// 2️⃣ Obtener variables
$idEstudiante = $_SESSION['idEstudiante'];
$id_actividad_actual = isset($_POST['idActividad']) ? intval($_POST['idActividad']) : 0;

// Validar que exista idActividad
if ($id_actividad_actual <= 0) {
    echo json_encode([
        "status" => "error",
        "mensaje" => "ID de actividad inválido."
    ]);
    exit();
}

// 3️⃣ Calcular actividad anterior
$id_actividad_anterior = $id_actividad_actual - 1;

// Si es la primera actividad, siempre se permite
if ($id_actividad_actual == 1) {
    echo json_encode([
        "status" => "ok",
        "mensaje" => "✅ Primera actividad desbloqueada."
    ]);
    exit();
}

// 4️⃣ Consultar si la actividad anterior fue completada
$sql = "SELECT estado FROM Actividades_estudiante
        WHERE idEstudiante = ? AND idActividad = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $idEstudiante, $id_actividad_anterior);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
    if ($row['estado'] === 'completada') {
        echo json_encode([
            "status" => "ok",
            "mensaje" => "✅ Actividad anterior completada, puedes continuar."
        ]);
    } else {
        echo json_encode([
            "status" => "bloqueado",
            "mensaje" => "⚠️ Debes completar la actividad anterior antes de continuar."
        ]);
    }
} else {
    echo json_encode([
        "status" => "bloqueado",
        "mensaje" => "⚠️ No se encontró registro de la actividad anterior."
    ]);
}

$conn->close();
?>
