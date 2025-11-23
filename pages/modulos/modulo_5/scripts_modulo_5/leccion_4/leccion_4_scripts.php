<?php
include('../../../includes/conexion.php');

if(!isset($_SESSION['idEstudiante'])){
    echo "⚠️ Debes iniciar sesion.";
    exit();
}

$idEstudiante = $_SESSION['idEstudiante'];

$sql="SELECT 
    m.nombre_modulo,
    m.idModulo,
    a.idActividad,
    a.titulo_actividad,
    ae.estado,
    ae.calificacion
FROM actividades a
INNER JOIN modulo m ON a.idModulo = m.idModulo
LEFT JOIN Actividades_estudiante ae
    ON a.idActividad = ae.idActividad AND ae.idEstudiante = ?
WHERE m.idModulo = 5 AND a.idActividad = 25
ORDER BY a.idActividad ASC
LIMIT 1";


$stmt = $conn->prepare($sql);

if($stmt === false){
    die("Error en la preparación de la consulta: " . $conn->error);
}

$stmt->bind_param("i", $idEstudiante);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo '<h1>Modulo: ' . htmlspecialchars($row['nombre_modulo']) . '</h1>';
        echo 'Código de unidad: ' . htmlspecialchars($row['idModulo']) . '<br>';
        echo 'Código de actividad: ' . htmlspecialchars($row['idActividad']) . '<br>';
        echo 'Nombre de la actividad: ' . htmlspecialchars($row['titulo_actividad']) . '<br>';

        if(!empty($row['estado'])){
            echo 'Estado: ' . htmlspecialchars($row['estado']) . '<br>';
            echo 'Calificación: ' . htmlspecialchars($row['calificacion']) . '<br>';
        }else{
            echo 'Estado: No iniciado <br>';
        }
    }
}else{
    echo "Datos no encontrados";
}

$stmt->close();
$conn->close();
?>