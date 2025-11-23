<?php
$host="localhost";
$user="root";
$pass="022#";
$db="test";

$conexion = new mysqli($host, $user, $pass, $db);

if($conexion->connect_error){
    die("Conexion fallida: " . $conexion->connect_error);
}

if(isset($_POST['actualizar'])){
    $idEstudiante = $_POST['idEstudiante'];

    $campos = [];
    $valores = [];

    if(!empty($_POST['usuario'])){
        $campos[] = "usuario=?";
        $valores[] = $_POST['usuario'];
    }

    if(!empty($_POST['nombre_universidad'])){
        $campos[] = "nombre_universidad=?";
        $valores[] = $_POST['nombre_universidad'];
    }

    if(!empty($_POST['pais'])){
        $campos[] = "pais=?";
        $valores[] = $_POST['pais'];
    }

    if(!empty($_POST['estado'])){
        $campos[] = "estado=?";
        $valores[] = $_POST['estado'];
    }

    if(count($campos)>0){
        $sql = "UPDATE Estudiante SET " . implode(", ", $campos) . " WHERE idEstudiante=?";
        $stmt = $conexion->prepare($sql);

        $valores[] = $idEstudiante;

        $tipos = str_repeat("s", count($valores)-1) . "i";

        $stmt->bind_param($tipos, ...$valores);

        if($stmt->execute()){
            echo "<script>alert('Registro actualizado correctamente'); window.location.href='../editar_perfil.php'; </script>";
        }else{
            echo "<script>alert('Error al actualizar: " . $stmt->error . "');window.location.href='../editar_perfil.php'; </script>";
        }

        $stmt->close();
    }else{
        echo "<script>alert('No se proporcionaron campos para actualizar'); window.location.href='../editar_perfil.php'; </script>";
    }
}

$conexion->close();
?>