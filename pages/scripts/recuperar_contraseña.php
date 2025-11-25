<?php
session_start();
session_regenerate_id(true);

include("../../includes/conexion.php");

// Verificar que llegue por POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Sanitizar valores
    $usuario = trim($_POST['usuario'] ?? '');
    $password = trim($_POST['password'] ?? '');
    $password2 = trim($_POST['password2'] ?? '');

    // Validaciones básicas
    if ($usuario === "" || $password === "" || $password2 === "") {
        echo "<script>alert('Todos los campos son obligatorios.'); window.location.href='../recupera_contraseña.html';</script>";
        exit();
    }

    if ($password !== $password2) {
        echo "<script>alert('Las contraseñas no coinciden.'); window.location.href='../recupera_contraseña.html';</script>";
        exit();
    }

    if (strlen($password) < 6) {
        echo "<script>alert('La contraseña debe tener al menos 6 caracteres.'); window.location.href='../recupera_contraseña.html';</script>";
        exit();
    }

    // Buscar usuario
    $stmt = $conn->prepare("SELECT idEstudiante FROM Estudiante WHERE usuario = ? LIMIT 1");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 0) {
        echo "<script>alert('Usuario no encontrado.'); window.location.href='../recupera_contraseña.html';</script>";
        exit();
    }

    // Recuperar ID
    $row = $resultado->fetch_assoc();
    $idEstudiante = $row['idEstudiante'];

    // Encriptar contraseña nueva
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Actualizar contraseña
    $update = $conn->prepare("UPDATE Estudiante SET contraseña = ? WHERE idEstudiante = ?");
    $update->bind_param("si", $password_hash, $idEstudiante);

    if ($update->execute()) {
        echo "<script>alert('Contraseña actualizada correctamente.'); window.location.href='../../auth/login.html';</script>";
        exit();
    } else {
        echo "<script>alert('Error al actualizar la contraseña.'); window.location.href='../recupera_contraseña.html';</script>";
        exit();
    }

    // Cerrar statements
    $stmt->close();
    $update->close();
}

$conn->close();
?>
