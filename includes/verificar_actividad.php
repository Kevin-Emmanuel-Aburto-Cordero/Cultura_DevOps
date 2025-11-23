<?php
session_start();
include("conexion.php");
if(!isset($_SESSION['idEstudiante'])){
    header("Location: ../auth/login.html");
    exit();
}

$idEstudiante = $_SESSION[''];
$id_actividad_actual = $_POST['idActividad'];
$id_actividad_anterior $id_actividad_actual - 1;

if($id_actividad_actual == 1){
    echo json_encode(["status" => "ok", 
                      "mensaje" => "Primera actividad desbloqueada."]);
                      exit();
}

$sql = "SELECT estado FROM Actividades_estudiante
        WHERE idEstudiante = ?
        AND idActividad = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $id_actividad_anterior);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
    if ($row['estado'] === 'completada') {
        echo json_encode(["status" => "ok", 
                            "mensaje" => "Actividad anterior completada."]);
    } else {
        echo json_encode(["status" => "bloqueado", 
                            "mensaje" => "Debes completar la actividad anterior antes de continuar."]);
    }
} else {
    echo json_encode(["status" => "bloqueado", "mensaje" => 
                      "No tienes registro de la actividad anterior."]);
}
$conn->close();
?>