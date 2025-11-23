<?php
$host = "localhost";
$user = "root";
$pass = "022#";
$db = "test";

$conexion = new mysqli($host, $user, $pass, $db);

if($conexion->connect_error){
    die("Conexion fallida: " . $conexion->connect_error);
}

if(isset($_POST['eliminar'])){
    $idEstudiante = $_POST['idEstudiante'];

$sql = "DELETE FROM Estudiante WHERE idEstudiante=?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("i", $idEstudiante);

if($stmt->execute()){
    //echo "<script>alert('Cuenta eliminada correctamente.'); window.location.href='perfil.php';</script>";
    header("Location: ../../index.html");
    exit();
}else{
    echo "<script>alert('Error al eliminar cuenta: " . $stmt->error . "'); window.location.href='../perfil.php'; </script>";
}

$stmt->close();
}

$conexion->close();
?>