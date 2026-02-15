<?php
session_start();
include('../includes/conexion.php'); // Ajusta la ruta según tu estructura

// Verificar que la petición sea POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: registro.html");
    exit();
}

$usuario = trim($_POST['usuario'] ?? '');
$contrasena = trim($_POST['contrasena'] ?? '');
$universidad = trim($_POST['nombre_universidad'] ?? '');
$pais = trim($_POST['pais'] ?? '');
$estado = trim($_POST['estado'] ?? '');

// Validaciones del lado del servidor
if ($usuario == "" || strlen($usuario) < 4) {
    echo "<script>alert('Error: El usuario debe tener al menos 4 caracteres.'); window.location.href='register.html';</script>";
    exit;
}

if ($contrasena == "" || strlen($contrasena) < 6) {
    echo "<script>alert('Error: La contraseña debe tener al menos 6 caracteres.'); window.location.href='register.html';</script>";
    exit;
}

if ($universidad == "" || $pais == "" || $estado == "") {
    echo "<script>alert('Error: Todos los campos son obligatorios.'); window.location.href='register.html';</script>";
    exit;
}

// Verificar si el usuario ya existe
$query = "SELECT * FROM Estudiante WHERE usuario = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $usuario);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<script>alert('Error: Este usuario ya está registrado.'); window.location.href='register.html';</script>";
    exit;
}

// Encriptar contraseña
$contrasena_hash = password_hash($contrasena, PASSWORD_DEFAULT);

// Insertar usuario
$insert = "INSERT INTO Estudiante (usuario, contrasena, nombre_universidad, pais, estado) VALUES (?, ?, ?, ?, ?)";
$stmt2 = $conn->prepare($insert);
$stmt2->bind_param("sssss", $usuario, $contrasena_hash, $universidad, $pais, $estado);

if ($stmt2->execute()) {
    header("Location: login.html?registro=exitoso");
    exit();
} else {
    exit("Error al registrar: " . $conn->error);
}

$stmt2->close();
$stmt->close();
$conn->close();
?>
