<?php include '../core/header.php'; ?>

    <!--contenido de la pagina -->

    <!--Tabla de info general -->  
    
    <center>
    <div class="top-right">
        <p class="materia">Estructura</p>
        <p class="horario">L 8-11 AM</p>
        <p class="sede">Heredia</p>
    </div>
   
   <!-- Tabla de estudiantes -->
<h5 class="anuncio">Estudiantes</h5>

</center>
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


      <!--Formulario para editar tabla -->
      <h5 class="anuncio" style="margin-top: 8vh;">Buscar Estudiante</h5>

<hr>

<form class="row g-3">
    <div class="col-md-6">
        <label for="inputid" class="form-label">Cedula</label>
        <input type="id" class="form-control" id="inputid" placeholder="Cedula del Estudiante">
        </div>
    <div class="col-md-6">
    <label for="inputname" class="form-label">Nombre Completo</label>
    <input type="name" class="form-control" id="inputname" placeholder="Nombre del Estudiante">
    </div>
    <div class="col-md-2">
        <label for="inputCorreo" class="form-label">Correo Estudiantil</label>
        <input type="text" class="form-control" id="inputCorreo" placeholder="" >
    </div>
    <div class="col-md-2">
        <label for="inputCarrera" class="form-label">Carrera</label>
        <input type="text" class="form-control" id="inputCarrera" placeholder="" >
    </div>
    <div class="col-md-2">
        <label for="inputResidencia" class="form-label">Lugar de Residencia</label>
        <input type="text" class="form-control" id="inputResidencia" placeholder="" >
    </div>
    <div class="col-md-2">
        <label for="inputProyecto" class="form-label">Observaciones</label>
        <input type="text" class="form-control" id="inputProyecto" placeholder="Describa el Reporte" >
    </div>
    <div class="col-md-4">
    <label for="inputState" class="form-label">Reporte</label>
    <select id="inputState" class="form-select">
        <option selected>Escoja...</option>
        <option><p>Conducta</p></option>
        <option><p>Ausencias</p></option>
        <option><p>Notas</p></option>
        <option><p>Cancelacion de Curso</p></option>
    </select>
    </div>

    <div class="col-12">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
        Enviar Reporte
        </label>
    </div>
    </div>
    <div class="col-12">
    <button type="submit" class="btn btn-primary">Enviar Datos</button>
    </div>

  <hr>

</form>


<!-- Incluir jQuery antes del script -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Incluir SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Incluir el archivo de acciones -->
<script src="../js/acciones_estudiante.js"></script>

<!-- Footer de la página -->
<?php include '../core/footer.php'; ?>


