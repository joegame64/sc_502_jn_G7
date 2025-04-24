<?php
include("../includes/conexion.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $accion = $_POST['accion'];

    if ($accion === 'insertar') {
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        $curso_id = $_POST['curso_id'];
        $fecha = $_POST['fecha'];

        // Insertar práctica
        $stmt = $conn->prepare("INSERT INTO practicas (titulo, descripcion, curso_id, fecha) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssis", $titulo, $descripcion, $curso_id, $fecha);

        if ($stmt->execute()) {
            echo json_encode(["exito" => true]);
        } else {
            echo json_encode(["exito" => false, "mensaje" => "Error al insertar la práctica"]);
        }

        $stmt->close();
    }

    if ($accion === 'editar') {
        $id = $_POST['id'];
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        $fecha = $_POST['fecha'];

        // Actualizar práctica
        $stmt = $conn->prepare("UPDATE practicas SET titulo=?, descripcion=?, fecha=? WHERE id=?");
        $stmt->bind_param("sssi", $titulo, $descripcion, $fecha, $id);

        if ($stmt->execute()) {
            echo json_encode(["exito" => true]);
        } else {
            echo json_encode(["exito" => false, "mensaje" => "Error al actualizar la práctica"]);
        }

        $stmt->close();
    }

    if ($accion === 'eliminar') {
        $id = $_POST['id'];

        // Eliminar práctica
        $stmt = $conn->prepare("DELETE FROM practicas WHERE id=?");
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            echo json_encode(["exito" => true]);
        } else {
            echo json_encode(["exito" => false, "mensaje" => "Error al eliminar la práctica"]);
        }

        $stmt->close();
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if ($_GET['accion'] === 'editar') {
        $id = $_GET['id'];

        // Obtener práctica para editar
        $sql = "SELECT * FROM practicas WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $practica = $result->fetch_assoc();
            echo json_encode($practica);
        } else {
            echo json_encode(["error" => "Práctica no encontrada"]);
        }

        $stmt->close();
    }
}

$conn->close();
?>
