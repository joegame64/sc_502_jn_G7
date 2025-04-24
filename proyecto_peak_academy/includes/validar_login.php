<?php
session_start();
include('conexion.php');

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$sql = "SELECT * FROM usuarios WHERE usuario = ? AND activo = 1";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $usuario);
$stmt->execute();
$resultado = $stmt->get_result();

if ($usuarioBD = $resultado->fetch_assoc()) {
    if (password_verify($contrasena, $usuarioBD['contrasena'])) {
        $_SESSION['usuario'] = $usuarioBD['usuario'];
        $_SESSION['rol'] = $usuarioBD['rol'];
        header("Location: ../views/index.php");
    } else {
        echo "Contraseña incorrecta.";
    }
} else {
    echo "Usuario no encontrado.";
}
?>
