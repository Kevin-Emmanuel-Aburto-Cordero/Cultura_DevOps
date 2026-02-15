<?php
include('../includes/conexion.php');

if (!isset($_SESSION['usuario'])) {
    echo "No logueado";
    exit();
}

$usuario = $_SESSION['usuario'];

$sql = "SELECT usuario FROM Estudiante WHERE usuario = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $usuario);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
    echo htmlspecialchars($row['usuario']); 
} else {
    echo "Estado no encontrado";
}
?>