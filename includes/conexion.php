<?php
$servidor = "localhost";
$usuario = "root";
<<<<<<< HEAD
$contrasena="022#";
$db = "u249839193_cultura_devops";

$conn = new mysqli($servidor, $usuario, $contrasena, $db);
=======
$contraseña ="022#";
$db="test";

$conn = new mysqli($servidor, $usuario, $contraseña, $db);
>>>>>>> b2ed7e5fafd6695e7b3194bdd5228af52a673afc

if($conn->connect_error){
    die("Conexión fallida: " . $connect_error);
}

$conn->set_charset("utf8");
?>