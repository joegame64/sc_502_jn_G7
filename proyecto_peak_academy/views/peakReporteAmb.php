<?php include '../core/header.php'; ?>

<!-- Tabla de info general -->    
<div class="top-right">
    <p class="materia">Ambiente web</p>
    <p class="horario">L 6-9 PM</p>
    <p class="sede">San Pedro</p>
</div>

<!-- Tabla de estudiantes -->
<h5 class="anuncio">Estudiantes</h5>
<hr>

<?php
// Incluir la conexión a la base de datos
include('../includes/conexion.php');

// Consultar los estudiantes
$sql = "SELECT * FROM estudiantes";
$result = $conn->query($sql);

// Verificar si se encontraron resultados
if ($result && $result->num_rows > 0) {
    // Mostrar los estudiantes en la tabla
    echo '<div class="table-container">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Correo Estudiantil</th>
                        <th scope="col">Cédula</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Carrera</th>
                        <th scope="col">Sede</th> 
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>';

    // Iterar sobre los resultados y generar las filas
    while ($row = $result->fetch_assoc()) {
        echo '<tr>
                <th scope="row">' . $row['id'] . '</th>
                <td class="correo">' . $row['correo_estudiantil'] . '</td>
                <td class="cedula">' . $row['cedula'] . '</td>
                <td class="nombre">' . $row['nombre'] . '</td>
                <td class="apellido">' . $row['apellido'] . '</td>
                <td class="edad">' . $row['edad'] . '</td>
                <td class="carrera">' . $row['carrera'] . '</td>
                <td class="sede">' . $row['sede'] . '</td> 
                <td>
                    <button class="btn btn-warning btn-sm btn-editar" data-id="' . $row['id'] . '">Editar</button>
                    <button class="btn btn-danger btn-sm btn-eliminar" data-id="' . $row['id'] . '">Eliminar</button>
                    
                </td>
              </tr>';
    }

    echo '</tbody></table></div>';
} else {
    echo "<p>No se encontraron estudiantes.</p>";
}

// Cerrar la conexión
$conn->close();
?>

<!-- Incluir jQuery antes del script -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Incluir SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Incluir el archivo de acciones -->
<script src="../js/acciones_estudiante.js"></script>

<!-- Footer de la página -->
<?php include '../core/footer.php'; ?>


