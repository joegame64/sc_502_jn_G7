<?php include '../core/header.php'; ?>

<!-- Tabla de control de activos -->
<h5 class="anuncio">Control de Activos</h5>
<hr>

<!-- Botón para agregar un nuevo activo -->
<button class="btn btn-success" id="btn-agregar">Agregar Nuevo Activo</button>

<?php
// Incluir la conexión a la base de datos
include('../includes/conexion.php');

// Consultar los activos
$sql = "SELECT * FROM activos";
$result = $conn->query($sql);

// Verificar si se encontraron resultados
if ($result && $result->num_rows > 0) {
    // Mostrar los activos en la tabla
    echo '<div class="table-container">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre del Activo</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>';

    // Iterar sobre los resultados y generar las filas
    while ($row = $result->fetch_assoc()) {
        echo '<tr>
                <th scope="row">' . $row['id'] . '</th>
                <td class="nombre_activo">' . $row['nombre'] . '</td>
                <td class="cantidad">' . $row['cantidad'] . '</td>
                <td>
                    <button class="btn btn-warning btn-sm btn-editar" data-id="' . $row['id'] . '" data-nombre="' . $row['nombre'] . '" data-cantidad="' . $row['cantidad'] . '">Editar</button>
                    <button class="btn btn-danger btn-sm btn-eliminar" data-id="' . $row['id'] . '">Eliminar</button>
                </td>
              </tr>';
    }

    echo '</tbody></table></div>';
} else {
    echo "<p>No se encontraron activos.</p>";
}

// Cerrar la conexión
$conn->close();
?>

<!-- Incluir jQuery antes del script -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Incluir SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Incluir el archivo de acciones -->
<script src="../js/acciones_activo.js"></script>

<!-- Footer de la página -->
<?php include '../core/footer.php'; ?>
