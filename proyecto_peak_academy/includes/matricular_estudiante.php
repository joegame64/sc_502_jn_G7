<?php
include('../includes/conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $correo_estudiantil = $_POST['correo_estudiantil'];
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $carrera = $_POST['carrera'];
    $sede = $_POST['sede'];
    $curso_id = $_POST['curso_id']; // Curso seleccionado

    // Validación del correo electrónico
    if (!filter_var($correo_estudiantil, FILTER_VALIDATE_EMAIL)) {
        die("El correo electrónico no es válido.");
    }

    // Validación de edad
    if ($edad < 18 || $edad > 100) {
        die("La edad debe estar entre 18 y 100 años.");
    }

    // Marcamos el estudiante como activo (1)
    $activo = 1;

    // Insertar el estudiante en la base de datos
    $sql = "INSERT INTO estudiantes (correo_estudiantil, cedula, nombre, apellido, edad, carrera, sede, curso_id, activo)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        // Notar el cambio: "ssssssssi" → 8 strings y 1 entero
        $stmt->bind_param("ssssssssi", $correo_estudiantil, $cedula, $nombre, $apellido, $edad, $carrera, $sede, $curso_id, $activo);
        
        if ($stmt->execute()) {
            echo "Estudiante insertado correctamente";
        } else {
            echo "Error al insertar el estudiante: " . $conn->error;
        }

        $stmt->close();
    } else {
        echo "Error en la preparación de la consulta: " . $conn->error;
    }

    $conn->close();
}
?>

