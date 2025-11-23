<?php
include("../includes/conexion.php");

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$nombre_universidad = $_POST['nombre_universidad'];
$pais = $_POST['pais'];
$estado = $_POST['estado'];

$contraseña_hash = password_hash($contraseña, PASSWORD_DEFAULT);

$sql = "INSERT INTO Estudiante (usuario, contraseña, nombre_universidad, pais, estado) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $usuario, $contraseña_hash, $nombre_universidad, $pais, $estado);

if($stmt->execute()){
    echo"<script>alert('Registrado'); window.location.href='register.php'; </script>";
    $_SESSION['usuario'] = $usuario;
    header("Location: login.html");
    exit();
}else{
    echo "<script>alert('Error: " . $stmt->error . "'); window.location.href='register.html'; </script>";
}

$stmt->close();
$conn->close();
?>