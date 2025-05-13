<?php
include 'db.php';

$id = $_POST['id'];
$nombre = trim($_POST['nombre']);
$correo = trim($_POST['correo']);

$errores = [];

if (empty($nombre)) $errores[] = "El nombre es obligatorio.";
if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) $errores[] = "Correo no válido.";

if (!empty($errores)) {
    echo implode("\n", $errores);
    exit;
}

$stmt = $conexion->prepare("UPDATE usuarios SET nombre=?, correo=? WHERE id=?");
$stmt->bind_param("ssi", $nombre, $correo, $id);
$stmt->execute();

echo "Usuario actualizado correctamente";
?>
