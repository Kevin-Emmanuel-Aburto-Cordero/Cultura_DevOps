<?php
<<<<<<< HEAD
// activar errores mientras depuras (quitar en producción)
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();
include("../../includes/conexion.php");

// 1) intentar obtener id desde la sesión
$idEstudiante = isset($_SESSION['idEstudiante']) ? intval($_SESSION['idEstudiante']) : 0;

// 2) si no existe en sesión, intentar leerlo del POST (input oculto)
if ($idEstudiante === 0 && isset($_POST['idEstudiante'])) {
    $idEstudiante = intval($_POST['idEstudiante']);
}

// 3) si aún no hay id, devolver error amigable y terminar
if ($idEstudiante <= 0) {
    echo "<script>alert('Falta el identificador del estudiante. Inicie sesión o inténtelo de nuevo.'); window.location.href='../perfil.php';</script>";
    exit();
}

// 4) validar la nueva contraseña
if (!isset($_POST['nueva_contrasena'])) {
    echo "<script>alert('No se recibió la nueva contraseña.'); window.location.href='../perfil.php';</script>";
    exit();
}

$nueva_contrasena = trim($_POST['nueva_contrasena']);
if ($nueva_contrasena === '') {
    echo "<script>alert('La contraseña no puede estar vacía.'); window.location.href='../perfil.php';</script>";
    exit();
}
if (strlen($nueva_contrasena) < 8) {
    echo "<script>alert('La contraseña debe tener al menos 8 caracteres.'); window.location.href='../perfil.php';</script>";
    exit();
}

// 5) hashear y actualizar por idEstudiante (SIEMPRE incluir WHERE)
$nueva_contrasena_hash = password_hash($nueva_contrasena, PASSWORD_DEFAULT);

$sql = "UPDATE Estudiante SET contrasena = ? WHERE idEstudiante = ?";
$stmt = $conn->prepare($sql);
if (!$stmt) {
    error_log("Prepare failed: " . $conn->error);
    echo "<script>alert('Error interno. Intente más tarde.'); window.location.href='../perfil.php';</script>";
    exit();
}
$stmt->bind_param("si", $nueva_contrasena_hash, $idEstudiante);

if ($stmt->execute()) {
    if ($stmt->affected_rows > 0) {
        echo "<script>alert('Contraseña actualizada correctamente.'); window.location.href='../perfil.php';</script>";
    } else {
        echo "<script>alert('No se actualizó: id no encontrado o la contraseña es igual a la anterior.'); window.location.href='../perfil.php';</script>";
    }
} else {
    error_log("Execute failed: " . $stmt->error);
    echo "<script>alert('Error al actualizar la contraseña.'); window.location.href='../perfil.php';</script>";
}

$stmt->close();
$conn->close();
exit();
?>

=======
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
>>>>>>> b2ed7e5fafd6695e7b3194bdd5228af52a673afc
