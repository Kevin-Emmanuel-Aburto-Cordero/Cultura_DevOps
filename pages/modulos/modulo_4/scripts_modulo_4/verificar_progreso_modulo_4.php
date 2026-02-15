<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json'); // Muy importante

include("../../../../includes/conexion.php");

if(!isset($_SESSION['idEstudiante'])){
    echo json_encode([
        "status" => "error",
        "mensaje" => "Debes iniciar sesión para continuar."
    ]);
    exit();
}

$idEstudiante = $_SESSION['idEstudiante'];
$idModulo = $_POST['idModulo'];

// Total de actividades del módulo
$sql_total = "SELECT COUNT(*) AS total FROM Actividades WHERE idModulo = ?";
$stmt_total = $conn->prepare($sql_total);
$stmt_total->bind_param("i", $idModulo);
$stmt_total->execute();
$result_total = $stmt_total->get_result();
$total_actividades = $result_total->fetch_assoc()['total'];

// Actividades completadas por el estudiante
$sql_completadas = "SELECT COUNT(*) AS completadas
                    FROM Actividades_estudiante ae
                    INNER JOIN Actividades a ON ae.idActividad = a.idActividad
                    WHERE ae.idEstudiante = ? AND a.idModulo = ? AND ae.estado = 'completada'";
$stmt_comp = $conn->prepare($sql_completadas);
$stmt_comp->bind_param("ii", $idEstudiante, $idModulo);
$stmt_comp->execute();
$result_comp = $stmt_comp->get_result();
$actividades_completadas = $result_comp->fetch_assoc()['completadas'];

// Respuesta JSON según el progreso
if($actividades_completadas == $total_actividades){
    echo json_encode([
        "status" => "ok",
        "mensaje" => "Has completado todas las actividades. Puedes realizar el examen."
    ]);
}else{
    echo json_encode([
        "status" => "pendiente",
        "mensaje" => "Te faltan actividades por completar ($actividades_completadas de $total_actividades)."
    ]);
}

$conn->close();
?>
