<?php
include 'db.php';

$nombre = trim($_POST['nombre']);
$correo = trim($_POST['correo']);
$password = $_POST['password'];
$fecha = $_POST['fecha'];

$errores = [];

if (empty($nombre)) $errores[] = "El nombre es obligatorio.";
if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) $errores[] = "Correo no válido.";
if (strlen($password) < 6) $errores[] = "La contraseña debe tener al menos 6 caracteres.";
if (!preg_match("/^\d{4}-\d{2}-\d{2}$/", $fecha)) $errores[] = "Formato de fecha inválido.";

if (!empty($errores)) {
    echo implode("\n", $errores);
    exit;
}

$hash = password_hash($password, PASSWORD_BCRYPT);
$stmt = $conexion->prepare("INSERT INTO usuarios (nombre, password, correo, fecha_nacimiento) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nombre, $hash, $correo, $fecha);
$stmt->execute();

echo "Usuario registrado correctamente";
?>
