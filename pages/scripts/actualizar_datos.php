<?php
session_start();
session_regenerate_id(true);

include("../../includes/conexion.php");

// Verificar que llegue por POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $idEstudiante = intval($_POST['idEstudiante'] ?? 0);

    if ($idEstudiante <= 0) {
        echo "<script>alert('ID inválido.'); window.location.href='../editar_perfil.php';</script>";
        exit();
    }

    // Sanitizar entradas
    $usuario = trim($_POST['usuario'] ?? '');
    $nombre_universidad = trim($_POST['nombre_universidad'] ?? '');
    $pais = trim($_POST['pais'] ?? '');
    $estado = trim($_POST['estado'] ?? '');

    $campos = [];
    $valores = [];

    // Agregar campos si vienen
    if ($usuario !== "") {
        $campos[] = "usuario = ?";
        $valores[] = $usuario;
    }

    if ($nombre_universidad !== "") {
        $campos[] = "nombre_universidad = ?";
        $valores[] = $nombre_universidad;
    }

    if ($pais !== "") {
        $campos[] = "pais = ?";
        $valores[] = $pais;
    }

    if ($estado !== "") {
        $campos[] = "estado = ?";
        $valores[] = $estado;
    }

    // Si no hay nada para actualizar
    if (count($campos) === 0) {
        echo "<script>alert('No se enviaron datos para actualizar.'); window.location.href='../editar_perfil.php';</script>";
        exit();
    }

    // Construcción dinámica del SQL
    $sql = "UPDATE Estudiante SET " . implode(", ", $campos) . " WHERE idEstudiante = ?";
    $stmt = $conn->prepare($sql);

    // Agregar id al final
    $valores[] = $idEstudiante;

    // Tipos: todos string excepto el último (ID)
    $tipos = str_repeat("s", count($valores) - 1) . "i";

    $stmt->bind_param($tipos, ...$valores);

    if ($stmt->execute()) {
        echo "<script>alert('Datos actualizados correctamente.'); window.location.href='../editar_perfil.php';</script>";
    } else {
        echo "<script>alert('Error al actualizar: " . $stmt->error . "'); window.location.href='../editar_perfil.php';</script>";
    }

    $stmt->close();
    $conn->close();
    exit();
}
?>
