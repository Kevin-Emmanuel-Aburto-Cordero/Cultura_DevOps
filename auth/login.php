<?php
session_start();
session_regenerate_id(true);
include("../includes/conexion.php");

$usuario = $_POST['usuario'];
<<<<<<< HEAD
$contrasena = $_POST['contrasena'];

$sql = "SELECT idEstudiante, usuario, contrasena FROM Estudiante WHERE usuario = ? LIMIT 1";
=======
$contraseña = $_POST['contraseña'];

$sql = "SELECT idEstudiante, usuario, contraseña FROM Estudiante WHERE usuario = ? LIMIT 1";
>>>>>>> b2ed7e5fafd6695e7b3194bdd5228af52a673afc
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $usuario);
$stmt->execute();
$resultado = $stmt->get_result();

if($resultado->num_rows > 0){
    $row = $resultado->fetch_assoc();

<<<<<<< HEAD
    if(password_verify($contrasena, $row['contrasena'])){
=======
    if(password_verify($contraseña, $row['contraseña'])){
>>>>>>> b2ed7e5fafd6695e7b3194bdd5228af52a673afc
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
