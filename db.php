<?php
$conexion = new mysqli("localhost", "root", "", "registro_usuarios");
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}
?>
