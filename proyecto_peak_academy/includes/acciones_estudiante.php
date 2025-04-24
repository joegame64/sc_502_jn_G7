<?php
include("conexion.php");

if ($_POST['accion'] === 'editar') {
    $id = $_POST['id'];
    $tareas = $_POST['tareas'];
    $examen = $_POST['examen'];
    $proyecto = $_POST['proyecto'];

    $stmt = $conn->prepare("UPDATE estudiantes SET tareas=?, examen=?, proyecto=? WHERE id=?");
    $stmt->bind_param("sssi", $tareas, $examen, $proyecto, $id);

    if ($stmt->execute()) {
        echo json_encode(["exito" => true]);
    } else {
        echo json_encode(["exito" => false, "mensaje" => "Error al actualizar"]);
    }

    $stmt->close();
    $conn->close();
}
?>
