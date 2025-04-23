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
                <td>' . $row['correo_estudiantil'] . '</td>
                <td>' . $row['cedula'] . '</td>
                <td>' . $row['nombre'] . '</td>
                <td>' . $row['apellido'] . '</td>
                <td>' . $row['edad'] . '</td>
                <td>' . $row['carrera'] . '</td>
                <td>' . $row['sede'] . '</td> 
                <td>
                    <a href="editar.php?id=' . $row['id'] . '" class="btn btn-warning btn-sm">Editar</a>
                    <a href="eliminar.php?id=' . $row['id'] . '" class="btn btn-danger btn-sm">Eliminar</a>
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

<!-- Footer de la página -->
<?php include '../core/footer.php'; ?>
