<?php
$servidor = "localhost";
$usuario = "root";
$contrasena="022#";
$db = "u249839193_cultura_devops";

$conn = new mysqli($servidor, $usuario, $contrasena, $db);

if($conn->connect_error){
    die("Conexión fallida: " . $connect_error);
}

$conn->set_charset("utf8");
?>