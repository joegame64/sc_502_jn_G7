<?php
include('../includes/conexion.php');

// Verificar si la petición es POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Insertar activo
    if (isset($_POST['nombre']) && isset($_POST['cantidad']) && !isset($_POST['action'])) {
        $nombre = $_POST['nombre'];
        $cantidad = $_POST['cantidad'];

        // Insertar el nuevo activo en la base de datos
        $sql = "INSERT INTO activos (nombre, cantidad) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $nombre, $cantidad);

        if ($stmt->execute()) {
            echo "Activo agregado correctamente";
        } else {
            echo "Error al agregar activo";
        }

        $stmt->close();
    }

    // Editar activo
    if (isset($_POST['action']) && $_POST['action'] == 'editar') {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $cantidad = $_POST['cantidad'];

        $sql = "UPDATE activos SET nombre = ?, cantidad = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", $nombre, $cantidad, $id);

        if ($stmt->execute()) {
            echo "Activo actualizado correctamente";
        } else {
            echo "Error al actualizar activo";
        }

        $stmt->close();
    }

    // Eliminar activo
    if (isset($_POST['action']) && $_POST['action'] == 'eliminar') {
        $id = $_POST['id'];

        $sql = "DELETE FROM activos WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            echo "Activo eliminado correctamente";
        } else {
            echo "Error al eliminar activo";
        }

        $stmt->close();
    }
}

$conn->close();
?>
