<?php
include("../../includes/conexion.php");

// Verifica si se enviaron los datos
if (isset($_POST['nueva_contraseña'])) {
    $usuario = $_POST['usuario'];
    $nueva_contraseña = $_POST['nueva_contraseña'];

    // Encriptar la nueva contraseña
    $nueva_contraseña_hash = password_hash($nueva_contraseña, PASSWORD_DEFAULT);

    // Consulta SQL para actualizar la contraseña
    $sql = "UPDATE Estudiante SET contraseña = ? WHERE usuario = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $nueva_contraseña_hash,$usuario);

    if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
            echo "<script>alert('✅ Contraseña actualizada correctamente.'); window.location.href='../perfil.php'; </script>";
        } else {
            echo "<script>alert('⚠️ No se encontró el usuario o la contraseña es la misma.'); window.location.href='../perfil.php'; </script>";
        }
    } else {
        echo "<script>alert('❌ Error: " . $stmt->error . "'); window.location.href='../perfil.php'; </script>";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "⚠️ Faltan datos. Debes enviar 'usuario' y 'nueva_contraseña'.";
}
?>
