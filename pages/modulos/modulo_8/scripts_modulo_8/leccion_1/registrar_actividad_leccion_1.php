<?php
session_start();
include('../../../../../includes/conexion.php');

if (!isset($_SESSION['idEstudiante'])) {
    header("Location: ../../../../auth/login.html");
    exit();
}

$idEstudiante = $_SESSION['idEstudiante'];
$idActividad = $_POST['idActividad'];
$accion = $_POST['accion'];

// Verificar si ya existe el registro
$sql_check = "SELECT * FROM Actividades_estudiante WHERE idEstudiante = ? AND idActividad = ?";
$stmt = $conn->prepare($sql_check);
$stmt->bind_param("ii", $idEstudiante, $idActividad);
$stmt->execute();
$result = $stmt->get_result();
$existe = $result->num_rows > 0;
$stmt->close();

if ($accion === "calificar") {
    $respuestas_correctas = [
        'pregunta_1' => 'c',
        'pregunta_2' => 'b',
        'pregunta_3' => 'a',
        'pregunta_4' => 'c',
        'pregunta_5' => 'b'
    ];

    $puntos = 0;
    $total = count($respuestas_correctas);

    foreach ($respuestas_correctas as $pregunta => $respuesta) {
        if (isset($_POST[$pregunta]) && $_POST[$pregunta] === $respuesta) {
            $puntos++;
        }
    }

    $calificacion = round(($puntos / $total) * 100);

    if ($existe) {
        $sql = "UPDATE Actividades_estudiante 
                SET estado = 'pendiente', calificacion = ? 
                WHERE idEstudiante = ? AND idActividad = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iii", $calificacion, $idEstudiante, $idActividad);
    } else {
        $sql = "INSERT INTO Actividades_estudiante (idEstudiante, idActividad, estado, calificacion)
                VALUES (?, ?, 'pendiente', ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iii", $idEstudiante, $idActividad, $calificacion);
    }

    if ($stmt->execute()) {
        echo "<script>alert('Tu calificación es: $calificacion%'); history.back();</script>";
    } else {
        echo "<script>alert('Error al guardar la calificación: " . $stmt->error . "');</script>";
    }

    $stmt->close();

} elseif ($accion === "completar") {

    if ($existe) {
        $sql = "UPDATE Actividades_estudiante
                SET estado = 'completada'
                WHERE idEstudiante = ? AND idActividad = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $idEstudiante, $idActividad);
    } else {
        $sql = "INSERT INTO Actividades_estudiante (idEstudiante, idActividad, estado, calificacion)
                VALUES (?, ?, 'completada', 0)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $idEstudiante, $idActividad);
    }

    if ($stmt->execute()) {
        echo "<script>alert('Actividad marcada como completada'); window.location.href='../../modulo_8_introduccion.php';</script>";
    } else {
        echo "<script>alert('Error al actualizar el estado: " . $stmt->error . "');</script>";
    }

    $stmt->close();
}

$conn->close();
?>
