<?php
include 'db.php';
$id = $_POST['id'];
$conexion->query("DELETE FROM usuarios WHERE id = $id");
echo "Usuario eliminado";
?>
