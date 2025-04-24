<?php include '../core/header.php'; ?>

<div class="container">
    <h5 class="anuncio text-center">Prácticas de Estudiantes</h5>

    <!-- Formulario de agregar nueva práctica -->
    <h5 class="anuncio mt-5 text-center">Agregar Nueva Práctica</h5>
    <form id="form-agregar-practica">
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea class="form-control" id="descripcion" required></textarea>
        </div>
        <div class="form-group">
            <label for="curso_id">Curso</label>
            <select class="form-control" id="curso_id" required>
                <?php
                include('../includes/conexion.php');
                $sql = "SELECT * FROM cursos";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['id'] . "'>" . $row['nombre'] . "</option>";
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" class="form-control" id="fecha" required>
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>

    <hr>

    <h5 class="anuncio">Lista de Prácticas</h5>

    <?php
    include('../includes/conexion.php');
    $sql = "SELECT * FROM practicas";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        echo '<table class="table table-bordered mt-3">';
        echo '<thead>
                <tr>
                    <th>#</th>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Curso</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
              </thead>
              <tbody>';
        while ($row = $result->fetch_assoc()) {
            echo '<tr>
                    <td>' . $row['id'] . '</td>
                    <td>' . $row['titulo'] . '</td>
                    <td>' . $row['descripcion'] . '</td>
                    <td>' . $row['curso_id'] . '</td>
                    <td>' . $row['fecha'] . '</td>
                    <td>
                        <button class="btn btn-warning btn-sm btn-editar" 
                            data-id="' . $row['id'] . '">Editar</button>
                        <button class="btn btn-danger btn-sm btn-eliminar" 
                            data-id="' . $row['id'] . '">Eliminar</button>
                    </td>
                </tr>';
        }
        echo '</tbody></table>';
    } else {
        echo '<p>No hay prácticas disponibles.</p>';
    }
    ?>

</div>

<?php include '../core/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../js/acciones_practicas.js"></script>
