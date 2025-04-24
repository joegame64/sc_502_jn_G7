<?php
include('conexion.php');

$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
$rol = $_POST['rol'];

$sql = "INSERT INTO usuarios (nombre, usuario, contrasena, rol, activo) VALUES (?, ?, ?, ?, 1)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ssss', $nombre, $usuario, $contrasena, $rol);

if ($stmt->execute()) {
    header("Location: ../login.php");
} else {
    echo "Error al registrar el usuario.";
}
?>
