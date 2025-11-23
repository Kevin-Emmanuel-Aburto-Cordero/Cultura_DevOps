<?php
session_start();
include('../../../../../includes/conexion.php');

if(!isset($_SESSION['idEstudiante'])){
    header("Location: ../../../../auth/login.html");
    exit();
}

$idEstudiante = $_SESSION['idEstudiante'];
$idActividad = $_POST['idActividad'];
$accion = $_POST['accion'];

$sql_check = "SELECT * FROM Actividades_estudiante WHERE idEstudiante = ? AND idActividad = ?";
$stmt = $conn->prepare($sql_check);
$stmt->bind_param("ii", $idEstudiante, $idActividad);
$stmt->execute();
$result = $stmt->get_result();
$existe = $result->num_rows > 0;

if ($accion === "calificar") {

    // ✅ Respuestas correctas (parejas correctas)
    $respuestas_correctas = [
        'r1' => 'b',
        'r2' => 'c',
        'r3' => 'f',
        'r4' => 'i',
        'r5' => 'h',
        'r6' => 'a',
        'r7' => 'e',
        'r8' => 'd',
        'r9' => 'g',
        'r10' => 'j'
    ];

    $puntos = 0;
    $total = count($respuestas_correctas);

    foreach ($respuestas_correctas as $pregunta => $respuesta_correcta) {
        if (isset($_POST[$pregunta]) && $_POST[$pregunta] === $respuesta_correcta) {
            $puntos++;
        }
    }

    $calificacion = round(($puntos / $total) * 100);

    // 🔹 Si ya existe, actualiza
    if ($existe) {
        $sql = "UPDATE Actividades_estudiante 
                SET estado = 'pendiente', calificacion = ?
                WHERE idEstudiante = ? AND idActividad = ?";
        $stmt = $conn->prepare($sql);
        // ✅ Orden correcto: calificacion, idEstudiante, idActividad
        $stmt->bind_param("iii", $calificacion, $idEstudiante, $idActividad);
    } 
    // 🔹 Si no existe, inserta nuevo registro
    else {
        $sql = "INSERT INTO Actividades_estudiante (idEstudiante, idActividad, estado, calificacion)
                VALUES (?, ?, 'pendiente', ?)";
        $stmt = $conn->prepare($sql);
        // ✅ Orden correcto: idEstudiante, idActividad, calificacion
        $stmt->bind_param("iii", $idEstudiante, $idActividad, $calificacion);
    }

    $stmt->execute();

    echo "<script>
            alert('Tu calificación es: $calificacion%');
            history.back();
          </script>";

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

    $stmt->execute();

    echo "<script>
            alert('Actividad marcada como completada');
            window.location.href = '../../modulo_7_introduccion.php';
          </script>";
}

$stmt->close();
$conn->close();
?>
