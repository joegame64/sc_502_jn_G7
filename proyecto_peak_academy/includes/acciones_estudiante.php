<?php
include('../includes/conexion.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['accion'] == 'eliminar') {
        $id = $_POST['id'];
        $sql = "UPDATE estudiantes SET activo = 0 WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo json_encode(['success' => true, 'mensaje' => 'Estudiante eliminado correctamente']);
        } else {
            echo json_encode(['success' => false, 'mensaje' => 'No se pudo eliminar al estudiante']);
        }
    }

    if ($_POST['accion'] == 'editar') {
        $sql = "UPDATE estudiantes SET nombre = ?, apellido = ?, correo_estudiantil = ?, cedula = ?, edad = ?, carrera = ?, sede = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param(
            'sssssssi',
            $_POST['nombre'],
            $_POST['apellido'],
            $_POST['correo_estudiantil'],
            $_POST['cedula'],
            $_POST['edad'],
            $_POST['carrera'], 
            $_POST['sede'],
            $_POST['id']
        );
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo json_encode(['success' => true, 'mensaje' => 'Estudiante actualizado correctamente']);
        } else {
            echo json_encode(['success' => false, 'mensaje' => 'No se pudo actualizar al estudiante']);
        }
    }
}

$conn->close();
?>

