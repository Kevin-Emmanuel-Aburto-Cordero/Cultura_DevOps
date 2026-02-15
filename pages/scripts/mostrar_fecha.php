<?php
//session_start();
include("../includes/conexion.php");

if (!isset($_SESSION['usuario'])) {
    echo "No logueado";
    exit();
}

$usuario = $_SESSION['usuario'];

$sql = "SELECT fecha_registro FROM Estudiante WHERE usuario = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $usuario);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
    $fecha_registro = $row['fecha_registro'];

    // Formato bonito
    setlocale(LC_TIME, "es_ES.UTF-8");
    echo strftime("%d de %B de %Y a las %I:%M %p", strtotime($fecha_registro));
} else {
    echo "Fecha no encontrada";
}
?>