<?php include '../core/header.php'; ?>

<div class="container">
    <h5 class="anuncio text-center">Notas de Estudiantes</h5>

    <!-- Tabla de rubros -->
    <h5 class="anuncio mt-5 text-center">Rubros de Evaluación</h5>
    <div class="d-flex justify-content-center">
        <table class="tablaRubros table table-bordered mt-3" style="width: auto;">
            <thead class="table-light">
                <tr>
                    <th>Actividad</th>
                    <th>Cantidad</th>
                    <th>Peso Individual</th>
                    <th>Peso Total</th>
                </tr>
            </thead>
            <tbody>
                <tr><th>Tareas</th><td>2</td><td>10%</td><td>20%</td></tr>
                <tr><th>Examen</th><td>1</td><td>30%</td><td>30%</td></tr>
                <tr><th>Proyecto</th><td>3 Entregables</td><td>16.67%</td><td>50%</td></tr>
                <tr><th>Total</th><td>-</td><td>-</td><td>100%</td></tr>
            </tbody>
        </table>
    </div>

    <hr>

    <h5 class="anuncio">Estudiantes y Notas</h5>

    <!-- Tabla de estudiantes -->
    <?php
    include('../includes/conexion.php');

    $sql = "SELECT * FROM estudiantes";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        echo '<div class="table-container">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Tareas</th>
                            <th>Examen</th>
                            <th>Proyecto</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>';
        while ($row = $result->fetch_assoc()) {
            echo '<tr>
                    <th>' . $row['id'] . '</th>
                    <td>' . $row['nombre'] . '</td>
                    <td>' . $row['tareas'] . '</td>
                    <td>' . $row['examen'] . '</td>
                    <td>' . $row['proyecto'] . '</td>
                    <td>
                        <button class="btn btn-warning btn-sm btn-editar" 
                            data-id="' . $row['id'] . '" 
                            data-tareas="' . $row['tareas'] . '" 
                            data-examen="' . $row['examen'] . '" 
                            data-proyecto="' . $row['proyecto'] . '">
                            Editar
                        </button>
                    </td>
                </tr>';
        }
        echo '</tbody></table></div>';
    } else {
        echo "<p>No se encontraron estudiantes.</p>";
    }
    $conn->close();
    ?>

    <!-- Scripts necesarios -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../js/acciones_estudiante.js"></script>
</div>

<?php include '../core/footer.php'; ?>
