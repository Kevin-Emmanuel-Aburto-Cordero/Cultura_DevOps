<?php
session_start();
session_regenerate_id(true);
include("../includes/conexion.php");

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$sql = "SELECT idEstudiante, usuario, contrasena FROM Estudiante WHERE usuario = ? LIMIT 1";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $usuario);
$stmt->execute();
$resultado = $stmt->get_result();

if($resultado->num_rows > 0){
    $row = $resultado->fetch_assoc();

    if(password_verify($contrasena, $row['contrasena'])){
        $_SESSION['idEstudiante'] = $row['idEstudiante'];
        $_SESSION['usuario'] = $row['usuario'];

        header("Location: dashboard.php");
        exit();
    }else{
        echo "<script>alert('Contraseña incorrecta.'); window.location.href='login.html'; </script>";
    }
}else{
    echo "<script>alert('Usuario no encontrado.'); window.location.href='login.html'; </script>";
}

$stmt->close();
$conn->close();
?>
