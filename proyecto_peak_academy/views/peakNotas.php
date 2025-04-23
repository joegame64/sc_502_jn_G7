<?php include '../core/header.php'; ?>
<?php include '../includes/helpers.php'; ?>

<!-- Pequeño anuncio -->
<h5 class="anuncio">Tus cursos</h5>
<hr>

<?php
// Incluir la conexión a la base de datos
include('../includes/conexion.php');

// Consultar los cursos
$sql = "SELECT * FROM cursos";
$result = $conn->query($sql);

// Verificar si se encontraron resultados
if ($result && $result->num_rows > 0) {
    echo '<p class="anuncio" style="margin-top: 25px;">Escoge un curso para Modificar las Notas</p>';
    echo '<div class="container-custom"><div class="row-custom">';

    // Iterar sobre los resultados y generar las tarjetas
    while ($row = $result->fetch_assoc()) {
        $nombreArchivo = limpiarNombreArchivo($row['nombre']); // Limpiar el nombre

        echo '<div class="card">
                <div class="card-body">
                    <h5 class="card-title">' . htmlspecialchars($row['nombre']) . '</h5>
                    <p class="card-text">' . htmlspecialchars($row['descripcion']) . '</p>
                    <hr>
                    <p>' . (isset($row['horarios']) ? htmlspecialchars($row['horarios']) : 'Horario no especificado') . '</p>
                    <hr>
                    <p>' . (isset($row['ubicacion']) ? htmlspecialchars($row['ubicacion']) : 'Ubicación no especificada') . '</p>
                    <a href="../views/peak' . $nombreArchivo . '.php" class="btn btn-primary">Ir a Notas</a>
                </div>
              </div>';
    }

    echo '</div></div>';
} else {
    echo "<p class='anuncio'>No se encontraron cursos.</p>";
}

// Cerrar la conexión
$conn->close();
?>

<!-- Footer de la página -->
<?php include '../core/footer.php'; ?>
