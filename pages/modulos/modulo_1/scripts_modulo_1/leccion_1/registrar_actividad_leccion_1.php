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

// Verificar si ya existe registro
$sql_check = "SELECT * FROM Actividades_estudiante WHERE idEstudiante = ? AND idActividad = ?";
$stmt = $conn->prepare($sql_check);
$stmt->bind_param("ii", $idEstudiante, $idActividad);
$stmt->execute();
$result = $stmt->get_result();
$existe = $result->num_rows > 0;
$stmt->close();

if($accion === "calificar"){

    // NOMBRE CORRECTO
    $respuestas_correctas = [
        'pregunta_1' => 'c',
        'pregunta_2' => 'c',
        'pregunta_3' => 'b',
        'pregunta_4' => 'b'
    ];

    $puntos = 0;
    $total = count($respuestas_correctas);

    foreach($respuestas_correctas as $pregunta => $respuesta){
        if(isset($_POST[$pregunta]) && $_POST[$pregunta] === $respuesta){
            $puntos++;
        }
    }

    $calificacion = round(($puntos / $total) * 100);

    if($existe){
        // UPDATE
        $sql = "UPDATE Actividades_estudiante 
                SET estado = 'pendiente', calificacion = ? 
                WHERE idEstudiante = ? AND idActividad = ?";
        $stmt = $conn->prepare($sql);
        // ORDEN CORRECTO
        $stmt->bind_param("iii", $calificacion, $idEstudiante, $idActividad);
    }else{
        // INSERT
        $sql ="INSERT INTO Actividades_estudiante (idEstudiante, idActividad, estado, calificacion)
               VALUES (?, ?, 'pendiente', ?)";
        $stmt = $conn->prepare($sql);
        // ORDEN CORRECTO
        $stmt->bind_param("iii", $idEstudiante, $idActividad, $calificacion);
    }

    $stmt->execute();
    $stmt->close();

    echo "<script>alert('Tu calificación es: $calificacion%'); history.back();</script>";

}elseif($accion === "completar"){

    if($existe){
        $sql="UPDATE Actividades_estudiante
              SET estado = 'completada'
              WHERE idEstudiante = ? AND idActividad = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $idEstudiante, $idActividad);
    }else{
        $sql="INSERT INTO Actividades_estudiante (idEstudiante, idActividad, estado, calificacion)
              VALUES (?, ?, 'completada', 0)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $idEstudiante, $idActividad);
    }

    $stmt->execute();
    $stmt->close();

    echo "<script>alert('Actividad marcada como completada'); window.location.href='../../modulo_1_introduccion.php';</script>";
}

$conn->close();
?>
