<?php
$host="localhost";
$user="root";
$pass="022#";
$db="test";

$conexion=new mysqli($host, $user, $pass, $db);

if($conexion->connect_error) die("Error BD");

if($_SERVER['REQUEST_METHOD']==='POST'){
    $usuario=trim($_POST['usuario']);
    $pass1=$_POST['password'] ?? '';
    $pass2=$_POST['password2'] ?? '';

    if($pass1 !== $pass2 || strlen($pass1)<6){
        //echo "Contraseñas no coinciden o muy cortas"; 
        echo"<script> alert('Contraseñas no coinciden o muy cortas.'); window.location.href='../recupera_contraseña.html'; </script>";
        exit;
    }

    $stmt=$conexion->prepare("SELECT idEstudiante FROM Estudiante WHERE usuario=? LIMIT 1");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $res=$stmt->get_result();

    if($row=$res->fetch_assoc()){
        $id=$row['idEstudiante'];
        $hash_pass=password_hash($pass1, PASSWORD_DEFAULT);
        $upd=$conexion->prepare("UPDATE Estudiante SET contraseña=? WHERE idEstudiante=?");
        $upd->bind_param("si",$hash_pass, $id);
        if($upd->execute()){
            echo "<script>alert('Contraseña actualizada.'); window.localtion.href='../../auth/login.html'; </script>";
            /*echo "<br>";
            echo "<a href='../../auth/login.html'>Iniciar Sesion</a>";*/
            header("Location: ../../auth/login.html");
        }else{
            //echo "Error al actualizar contraseña";
            echo "<script>alert('Error al actualizar contraseña.'); window.location.href='../recupera_contraseña.html';</script>";
            exit;
        }
        $upd->close();
    }else{
        //echo "Usuario no encontrado";
        echo"<script> alert('Usuario no encontrado.'); window.location.href='../recupera_contraseña.html'; </script>";
        exit;
    }
    $stmt->close();
    $conexion->close();
    exit;
}
?>