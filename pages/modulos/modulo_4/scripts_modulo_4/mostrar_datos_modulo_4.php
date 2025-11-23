<?php
include("../../../includes/conexion.php");

if(!isset($_SESSION['usuario'])){
    header("../../../auth/login.html");;
    exit();
}

$sql = "SELECT * FROM Modulo WHERE idModulo = 4";
$result = $conn->query($sql);

if($row = $result->fetch_assoc()){
    echo "<b>Codigo de unidad: </b>" . $row['idModulo'] . "<br>";
    echo "<b>Nombre de la unidad: </b>" . $row['nombre_modulo'] . "<br>";
    echo "<b>Descripcion de la unidad: </b>" . $row['descripcion_unidad'] . "<br>";
    echo "<b>Objetivos: </b>" . $row['objetivos'] . "<br>";
    echo "<b>Criterios de Evaluacion: </b>" . $row['criterios_evaluacion'] . "<br>";
    echo "<b>Contenido: </b>" . $row['contenido'] . "<br>";
    echo "<b>Actividades: </b>" . $row['numero_actividades'] . "<br>";
    echo "<b>Recursos: </b>" . $row['recursos'] . "<br>";
    echo "<b>Evaluacion: </b>" . $row['envalucacion'] . "<br>";
}else{
    echo "Datos no encontrados";
}
?>