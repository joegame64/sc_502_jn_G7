<?php
include('../includes/conexion.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($_POST['accion'] == 'eliminar') {
        $id = $_POST['id'];
        
        // Verificar que el ID se haya recibido correctamente
        if (empty($id)) {
            echo json_encode(['success' => false, 'mensaje' => 'ID no válido']);
            exit;
        }

        // Preparar la consulta SQL
        $sql = "UPDATE estudiantes SET activo = 0 WHERE id = ?";
        $stmt = $conn->prepare($sql);

        // Verificar si la preparación fue exitosa
        if ($stmt === false) {
            die('Error en la preparación de la consulta: ' . $conn->error);
        }

        // Vincular el parámetro y ejecutar la consulta
        $stmt->bind_param('i', $id);
        $stmt->execute();

        // Verificar si la consulta afectó alguna fila
        if ($stmt->affected_rows > 0) {
            echo json_encode(['success' => true, 'mensaje' => 'Estudiante marcado como inactivo']);
        } else {
            // Si no se afectaron filas, es posible que el estudiante ya esté inactivo
            echo json_encode(['success' => false, 'mensaje' => 'No se pudo eliminar al estudiante o ya está inactivo']);
        }

        // Cerrar la declaración
        $stmt->close();
    }

    if ($_POST['accion'] == 'editar') {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo_estudiantil = $_POST['correo_estudiantil'];
        $cedula = $_POST['cedula'];
        $edad = $_POST['edad'];
        $carrera = $_POST['carrera'];
        $sede = $_POST['sede'];

        // Preparar la consulta SQL
        $sql = "UPDATE estudiantes SET nombre = ?, apellido = ?, correo_estudiantil = ?, cedula = ?, edad = ?, carrera = ?, sede = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);

        // Verificar si la preparación fue exitosa
        if ($stmt === false) {
            die('Error en la preparación de la consulta: ' . $conn->error);
        }

        // Vincular los parámetros
        $stmt->bind_param(
            'sssssssi',
            $nombre,
            $apellido,
            $correo_estudiantil,
            $cedula,
            $edad,
            $carrera,
            $sede,
            $id
        );

        // Ejecutar la consulta
        $stmt->execute();

        // Verificar si la consulta afectó alguna fila
        if ($stmt->affected_rows > 0) {
            echo json_encode(['success' => true, 'mensaje' => 'Estudiante actualizado correctamente']);
        } else {
            echo json_encode(['success' => false, 'mensaje' => 'No se pudo actualizar al estudiante']);
        }

        // Cerrar la declaración
        $stmt->close();
    }

    if ($_POST['accion'] == 'activar') {
        $id = $_POST['id'];

        // Verificar que el ID se haya recibido correctamente
        if (empty($id)) {
            echo json_encode(['success' => false, 'mensaje' => 'ID no válido']);
            exit;
        }

        // Preparar la consulta SQL
        $sql = "UPDATE estudiantes SET activo = 1 WHERE id = ?";
        $stmt = $conn->prepare($sql);

        // Verificar si la preparación fue exitosa
        if ($stmt === false) {
            die('Error en la preparación de la consulta: ' . $conn->error);
        }

        // Vincular el parámetro y ejecutar la consulta
        $stmt->bind_param('i', $id);
        $stmt->execute();

        // Verificar si la consulta afectó alguna fila
        if ($stmt->affected_rows > 0) {
            echo json_encode(['success' => true, 'mensaje' => 'Estudiante activado correctamente']);
        } else {
            // Si no se afectaron filas, es posible que el estudiante ya esté activo
            echo json_encode(['success' => false, 'mensaje' => 'No se pudo activar al estudiante o ya está activo']);
        }

        // Cerrar la declaración
        $stmt->close();
    }
}

// Cerrar la conexión
$conn->close();
?>
