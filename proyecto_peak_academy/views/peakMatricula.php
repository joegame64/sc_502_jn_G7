<?php include '../core/header.php'; ?>

<div class="container">
    <h5 class="anuncio text-center">Registrar Estudiante</h5>

    <!-- Formulario para ingresar estudiante -->
    <form id="form-estudiante" method="POST">
        <div class="mb-3">
            <label for="correo_estudiantil" class="form-label">Correo Estudiantil</label>
            <input type="email" class="form-control" id="correo_estudiantil" name="correo_estudiantil" required>
        </div>
        <div class="mb-3">
            <label for="cedula" class="form-label">Cédula</label>
            <input type="text" class="form-control" id="cedula" name="cedula" required>
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" required>
        </div>
        <div class="mb-3">
            <label for="edad" class="form-label">Edad</label>
            <input type="number" class="form-control" id="edad" name="edad" required min="18" max="100">
        </div>
        <div class="mb-3">
            <label for="carrera" class="form-label">Carrera</label>
            <input type="text" class="form-control" id="carrera" name="carrera" required>
        </div>
        <div class="mb-3">
            <label for="sede" class="form-label">Sede</label>
            <input type="text" class="form-control" id="sede" name="sede" required>
        </div>
        <div class="mb-3">
            <label for="curso_id" class="form-label">Curso</label>
            <select class="form-control" id="curso_id" name="curso_id" required>
                <?php
                // Obtener los cursos disponibles
                include('../includes/conexion.php');
                $sql_cursos = "SELECT * FROM cursos";
                $result_cursos = $conn->query($sql_cursos);
                if ($result_cursos && $result_cursos->num_rows > 0) {
                    while ($curso = $result_cursos->fetch_assoc()) {
                        echo '<option value="' . $curso['id'] . '">' . $curso['nombre'] . '</option>';
                    }
                } else {
                    echo '<option value="">No hay cursos disponibles</option>';
                }
                ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Registrar Estudiante</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    // Validación del formulario
    document.getElementById('form-estudiante').addEventListener('submit', function (event) {
        event.preventDefault();

        let correo = document.getElementById('correo_estudiantil').value;
        let cedula = document.getElementById('cedula').value;
        let nombre = document.getElementById('nombre').value;
        let apellido = document.getElementById('apellido').value;
        let edad = document.getElementById('edad').value;
        let carrera = document.getElementById('carrera').value;
        let sede = document.getElementById('sede').value;
        let cursoId = document.getElementById('curso_id').value;

        // Validación del correo electrónico
        let correoRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!correoRegex.test(correo)) {
            Swal.fire('Error', 'Por favor, ingresa un correo electrónico válido.', 'error');
            return;
        }

        // Validación de cédula
        if (cedula.trim() === '') {
            Swal.fire('Error', 'La cédula es obligatoria.', 'error');
            return;
        }

        // Validación de edad
        if (edad < 18 || edad > 100) {
            Swal.fire('Error', 'La edad debe estar entre 18 y 100 años.', 'error');
            return;
        }

        // Validación de otros campos
        if (nombre.trim() === '' || apellido.trim() === '' || carrera.trim() === '' || sede.trim() === '') {
            Swal.fire('Error', 'Todos los campos son obligatorios.', 'error');
            return;
        }

        // Validación de curso
        if (cursoId === '') {
            Swal.fire('Error', 'Por favor selecciona un curso.', 'error');
            return;
        }

        // Si pasa todas las validaciones, enviamos el formulario
        this.submit();
    });
</script>

<script src="../js/matricular_estudiante.js"></script>

<?php include '../core/footer.php'; ?>
