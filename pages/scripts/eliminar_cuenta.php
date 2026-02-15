<?php
session_start();
include("../../includes/conexion.php");

// Verificar que se envió el formulario desde el botón "eliminar"
if (isset($_POST['eliminar'])) {

    if (!isset($_POST['idEstudiante'])) {
        echo "<script>alert('Falta el ID del estudiante.'); window.location.href='../perfil.php';</script>";
        exit();
    }

    $idEstudiante = intval($_POST['idEstudiante']);

    // Iniciar transacción
    $conn->begin_transaction();

    try {

        // 1. Eliminar registros en Actividades_estudiante
        $sql1 = "DELETE FROM Actividades_estudiante WHERE idEstudiante = ?";
        $stmt1 = $conn->prepare($sql1);
        $stmt1->bind_param("i", $idEstudiante);
        $stmt1->execute();

        // 2. Eliminar registros en Progresos_modulo
        $sql2 = "DELETE FROM Progresos_modulo WHERE idEstudiante = ?";
        $stmt2 = $conn->prepare($sql2);
        $stmt2->bind_param("i", $idEstudiante);
        $stmt2->execute();

        // 3. Eliminar registros en Examenes_estudiante
        $sql3 = "DELETE FROM Examenes_estudiante WHERE idEstudiante = ?";
        $stmt3 = $conn->prepare($sql3);
        $stmt3->bind_param("i", $idEstudiante);
        $stmt3->execute();

        // 4. Finalmente eliminar al estudiante
        $sql4 = "DELETE FROM Estudiante WHERE idEstudiante = ?";
        $stmt4 = $conn->prepare($sql4);
        $stmt4->bind_param("i", $idEstudiante);
        $stmt4->execute();

        // Confirmar transacción
        $conn->commit();

        // Cerrar sesión del usuario
        session_unset();
        session_destroy();

        echo "<script>alert('Cuenta eliminada correctamente.'); window.location.href='../../index.html';</script>";
        exit();

    } catch (Exception $e) {

        // Algo falló, revertimos todo
        $conn->rollback();

        echo "<script>alert('Error al eliminar la cuenta: {$e->getMessage()}'); window.location.href='../perfil.php';</script>";
        exit();
    }
}

$conn->close();
?>
